<?php
include('db.php');
if (!empty($_POST['dni']) && !empty($_POST['password'])){
    $v1 = $_REQUEST['dni'];
    $v2 = $_REQUEST['password']; 
    $sql = "select * from users where dni = '$v1'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if(!$result){
        die("Error de conexion");
    }
    if(password_verify($v2,$row['password'])){
        $_SESSION['user_id'] = $row['idUser'];
        $_SESSION['user_name'] = $row['username'];
        $_SESSION['user_type'] = $row['type'];
        header("Location: dashboard1.php");
    }else{
        $_SESSION['error_login'] = 'CORREO O CONTRASEÑA INCORRECTO'; 
        $_SESSION['error_login_class'] = 'active'; 
        header("Location: home.php#ingresar");
        echo 'ERROR';
    }
}else{
    echo 'DEBE LLENAR TODOS LOS CAMPOS DEL FORMULARIO';
}
?>