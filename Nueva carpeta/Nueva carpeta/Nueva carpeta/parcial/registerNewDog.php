<?php
include('db.php');
if (!empty($_POST['codigo']) && !empty($_POST['name'])&& !empty($_POST['fechnac'])&& !empty($_POST['raza'])&& !empty($_POST['genero'])){
    $v1 = $_REQUEST['codigo'];
    $v2 = $_REQUEST['name'];
    $v3 = $_REQUEST['fechnac'];
    $v4 = $_REQUEST['raza'];
    $v5 = $_REQUEST['genero'];
    $v6 = $_REQUEST['foto'];       
    $v7 = $_SESSION['user_id'];
    $sql = "INSERT INTO perro (codPerro, nameDog, fechaNacimiento, raza, genero, foto, usuarioForen) VALUES ('$v1', '$v2', '$v3', '$v4', '$v5', '$v6', '$v7' )";
    $result = mysqli_query($conn, $sql);
    if(!$result){
        die("Error de conexion");
    }
    // $_SESSION['message_registro'] = 'Perro Registrado';
    // $_SESSION['message_registro_class'] = 'active';
    unset($_SESSION['count_perro']);
    header("Location: dashboard3.php");
}else{
    echo 'Debe llenar todos los campos';
}
?>