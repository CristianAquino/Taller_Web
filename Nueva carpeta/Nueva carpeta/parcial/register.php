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
    if(strlen($v2)>=8){
        if(preg_match($validacionL,$v4) && preg_match($validacionN,$v4) && preg_match($validacionE,$v4)){
            $password = password_hash($v4, PASSWORD_BCRYPT);   
            $sql = "INSERT INTO users (codUser,username, email, dni, password) VALUES ('$v3','$v1','$v2','$v3', '$password')";
            $result = mysqli_query($conn, $sql);
            if(!$result){
                die("Error de conexion");
            }
            $_SESSION['user_name'] = $v1;
            $_SESSION['user_type'] = 2;
            unset($_SESSION['error']);
            header("Location: dashboard1.php");
        }else{
            // $_SESSION['error'] = 'La contraseña debe tener letra mayuscula, numeros y #&%';
            // header("Location: login.php");
            echo 'La contraseña debe tener letra mayuscula, numeros y #&%';
        }
    }else{
        // $_SESSION['error'] = 'La contraseña debe tener mas de 8 caracteres';
        // header("Location: home.php");
        echo 'La contraseña debe tener mas de 8 caracteres';
    }
}else{
    echo 'DEBE LLENAR LOS CAMPOS DEL FORMULARIO';
}
?>