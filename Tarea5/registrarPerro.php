<?php
include('db.php');
if (isset($_GET['Registrar'])){
    $v1 = $_REQUEST['Codigo'];
    $v2 = $_REQUEST['Nombre'];
    $v3 = $_REQUEST['FechNac'];
    $v4 = $_REQUEST['Raza'];
    $v5 = $_REQUEST['Genero'];
    $v6 = $_REQUEST['Foto'];       
    $v7 = $_SESSION['user_id'];
    $sql = "INSERT INTO perrouser (DNI, Nombre, Raza, Genero, FechaNacimiento, Foto, usuarioForen) VALUES ('$v1', '$v2', '$v4', '$v5', '$v3', '$v6', '$v7' )";
    $result = mysqli_query($conn, $sql);
    if(!$result){
        die("Error de conexion");
    }
    $_SESSION['message_registro'] = 'Perro Registrado';
    $_SESSION['message_registro_class'] = 'active';
    header("Location: register.php");
}else{
    header("Location: register.php");
}
?>