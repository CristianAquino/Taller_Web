<?php
include('db.php');
if (isset($_GET['Registrar'])){
    $v1 = $_REQUEST['Codigo'];
    $v2 = $_REQUEST['Nombre'];
    $v3 = $_REQUEST['FechNac'];
    $v4 = $_REQUEST['Raza'];
    $v5 = $_REQUEST['Genero'];
    $v6 = $_REQUEST['Foto'];    
    $sql = "INSERT INTO Perro (DNI, Nombre, Raza, Genero, FechaNacimiento, Foto) VALUES ('$v1', '$v2', '$v4', '$v5', '$v3', '$v6' )";
    $result = mysqli_query($conn, $sql);
    if(!$result){
        die("Error de conexion");
    }
    $_SESSION['message'] = 'Perro Registrado';
    $_SESSION['message_type'] = 'active';
    header("Location: register.php");
}else{
    header("Location: register.php");
}
?>