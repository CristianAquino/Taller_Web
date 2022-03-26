<?php
include('db.php');
if (!empty($_POST['codigo']) && !empty($_POST['costo'])){
    $v1 = $_REQUEST['codigo'];
    $v2 = $_REQUEST['foto'];
    $v3 = $_REQUEST['sangre'];
    $v4 = $_REQUEST['medicina'];
    $v5 = $_REQUEST['costo'];
    $v6 = 'vetForen';
    $v7 = 'perForen';
    $sql = "INSERT INTO diagnostico (codDiagnostico, rayosX, sangre, medicamentos, costo, vetForen, perForen) VALUES ('$v1','$v2','$v3', '$v4', '$v5', '$v6', $v7)";
    $result = mysqli_query($conn, $sql);
    if(!$result){
        die("Error de conexion");
    }
    header("Location: dashboard.php");
}else{
    echo 'DEBE LLENAR LOS CAMPOS DEL FORMULARIO';
}
?>