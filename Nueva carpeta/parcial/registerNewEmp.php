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
    if(strlen($v5)>=8){
        if(preg_match($validacionL,$v5) && preg_match($validacionN,$v5) && preg_match($validacionE,$v5)){
            $password = password_hash($v5, PASSWORD_BCRYPT);   
            $sql = "INSERT INTO users (codUser, username, email, dni, password, type) VALUES ('$v4','$v2','$v3', '$v4', '$password', '$v6')";
            $result = mysqli_query($conn, $sql);
            if(!$result){
                die("Error de conexion");
            }
            header("Location: dashboard2.php");
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