<?php
include('db.php');
if (!empty($_POST['email']) && !empty($_POST['password'])){
    $v1 = $_REQUEST['email'];
    $v2 = $_REQUEST['password']; 
    $sql = "select * from users where email = '$v1'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if(!$result){
        die("Error de conexion");
    }
    if(password_verify($v2,$row['password'])){
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_name'] = $row['username'];
        header("Location: home.php");
    }else{
        $_SESSION['login'] = 'CORREO O CONTRASEÑA INCORRECTO'; 
        header("Location: login.php");
    }
}else{
    echo 'DEBE LLENAR TODOS LOS CAMPOS DEL FORMULARIO';
}
?>