<?php
include('db.php');
// $validacion = "/[a-z]+[A-Z]+[0-9]{2,}[$\#\%\&\\\]{2,}/";
$validacionL = "/[a-z]+[A-Z]+/";
$validacionN = "/[0-9]{2,}/";
$validacionE = "/[$\#\%\&\\\]{2,}/";
if (!empty($_POST['email']) && !empty($_POST['password'])){
    $v1 = $_REQUEST['email'];
    $v2 = $_REQUEST['password'];
    $v3 = $_REQUEST['user'];
    if(strlen($v2)>=8){
        if(preg_match($validacionL,$v2) && preg_match($validacionN,$v2) && preg_match($validacionE,$v2)){
            $password = password_hash($v2, PASSWORD_BCRYPT);   
            $sql = "INSERT INTO users (username, email, password) VALUES ('$v3','$v1', '$password')";
            $result = mysqli_query($conn, $sql);
            if(!$result){
                die("Error de conexion");
            }
            unset($_SESSION['error']);
            header("Location: login.php");
        }else{
            $_SESSION['error'] = 'La contraseña debe tener letra mayuscula, numeros y #&%';
            header("Location: login.php");
        }
    }else{
        $_SESSION['error'] = 'La contraseña debe tener mas de 8 caracteres';
        header("Location: login.php");
    }
}else{
    echo 'DEBE LLENAR LOS CAMPOS DEL FORMULARIO';
}
?>