<?php
include('db.php');
// $validacion = "/[a-z]+[A-Z]+[0-9]{2,}[$\#\%\&\\\]{2,}/";
$validacionL = "/[a-z]+[A-Z]+/";
$validacionN = "/[0-9]{2,}/";
$validacionE = "/[$\#\%\&\\\]{2,}/";
if (!empty($_POST['username']) && !empty($_POST['email'])&& !empty($_POST['dni'])&& !empty($_POST['password'])){
    $v2 = $_REQUEST['username'];
    $v3 = $_REQUEST['email'];
    $v4 = $_REQUEST['dni'];
    $v5 = $_REQUEST['password'];
    $v6 = $_REQUEST['type'];
    $DNIsql = "select * from users where dni = '$v4' or email = '$v3'";
    $DNIresult = mysqli_query($conn, $DNIsql);
    $DNIrow = mysqli_num_rows($DNIresult);
    if(!$DNIrow){
        if(strlen($v5)>=8){
            if(preg_match($validacionL,$v5) && preg_match($validacionN,$v5) && preg_match($validacionE,$v5)){
                $password = password_hash($v5, PASSWORD_BCRYPT);
                $sql = "INSERT INTO users (codUser, username, email, dni, password, type) VALUES ('$v4','$v2','$v3', '$v4', '$password', '$v6')";
                $result = mysqli_query($conn, $sql);
                if(!$result){
                    die("Error de conexion");
                }
                $_SESSION['mensaje_dash'] ='Registrado con exito';
                $_SESSION['class_dash'] ='dash';
                header("Location: dashboard2.php");
            }else{
                $_SESSION['error_emp_pass'] = 'La contraseña debe tener letra mayuscula, numeros y #&%';
                $_SESSION['error_emp_class'] = 'active';
                header("Location: dashboard2.php");
            }
        }else{
            $_SESSION['error_emp_pass'] = 'La contraseña debe tener mas de 8 caracteres';
            $_SESSION['error_emp_class'] = 'active';
            header("Location: dashboard2.php");
        }
    }else{
        $_SESSION['error_emp_dni'] = 'El DNI o email ya existe';
        $_SESSION['error_emp_class'] = 'active';
        header("Location: dashboard2.php");
    }
}else{
    echo 'DEBE LLENAR LOS CAMPOS DEL FORMULARIO';
}
?>