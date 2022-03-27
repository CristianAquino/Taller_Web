<?php
include('db.php');
// $validacion = "/[a-z]+[A-Z]+[0-9]{2,}[$\#\%\&\\\]{2,}/";
$validacionL = "/[a-z]+[A-Z]+/";
$validacionN = "/[0-9]{2,}/";
$validacionE = "/[$\#\%\&\\\]{2,}/";
if (!empty($_POST['username']) && !empty($_POST['email'])&& !empty($_POST['dni'])&& !empty($_POST['password'])){
    $v1 = $_REQUEST['username'];
    $v2 = $_REQUEST['email'];
    $v3 = $_REQUEST['dni'];
    $v4 = $_REQUEST['password'];
    $DNIsql = "select * from users where dni = '$v3'";
    $DNIresult = mysqli_query($conn, $DNIsql);
    $DNIrow = mysqli_num_rows($DNIresult);
    if(!$DNIrow && strlen($v3)>=8){
        if(strlen($v4)>=8){
            if(preg_match($validacionL,$v4) && preg_match($validacionN,$v4) && preg_match($validacionE,$v4)){
                $password = password_hash($v4, PASSWORD_BCRYPT);
                $sql = "INSERT INTO users (codUser,username, email, dni, password) VALUES ('$v3','$v1','$v2','$v3', '$password')";
                $result = mysqli_query($conn, $sql);
                if(!$result){
                    die("Error de conexion");
                }
                $_SESSION['mensaje_register'] ='Registrado con exito';
                $_SESSION['mensaje_class'] ='register';
                header("Location: home.php#ingresar");
            }else{
                $_SESSION['error_register_user'] = 'La contraseña debe tener letra mayuscula, numeros y #&%';
                $_SESSION['error_register_class'] = 'active';
                header("Location: home.php#ingresar");
                echo 'La contraseña debe tener letra mayuscula, numeros y #&%';
            }
        }else{
            $_SESSION['error_register_user'] = 'La contraseña debe tener mas de 8 caracteres';
            $_SESSION['error_register_class'] = 'active';
            header("Location: home.php#ingresar");
        }
    }else{
        $_SESSION['error_dni_user'] = 'El DNI ingresado ya existe';
        $_SESSION['error_dni_class'] = 'active';
        header("Location: home.php#ingresar");
    }
}else{
    echo 'DEBE LLENAR LOS CAMPOS DEL FORMULARIO';
}
?>