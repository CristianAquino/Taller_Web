<?php include('db.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Consulta</h1>
    <form class="form" action="" method="GET">
            <input type="text" name="dni" placeholder="Ingrese Nombre a buscar">
            <input type="submit" name="Buscar" value="Buscar">
    </form>
    <?php
    if (isset($_GET['Buscar'])){
        $v2 = $_GET['dni'];    
        $sql = "select * from perro where dni = '$v2'";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)):?>
            <p><?= $row['DNI'] ?></p>
            <p><?= $row['usuarioForen'] ?></p>
            <p><?= $row['id'] ?></p>
        <?php endwhile;?>
    <?php }?>
    <p>Historial</p>
    <?php
    if (isset($_GET['Buscar'])){
        $v3 = $_GET['dni'];    
        $newsql = "select diagnostico.Nombre, users.username from perro inner join diagnostico on perro.id = diagnostico.perForen inner join users on diagnostico.vetForen = users.id where dni = '$v3'";
        $newresult = mysqli_query($conn, $newsql);
        while($newrow = mysqli_fetch_array($newresult)){?>
            <?php echo $newrow ?>
            <p>Diagnostico<?= $newrow['Nombre'] ?></p>
            <p>Veterinario<?= $newrow['username'] ?></p>
        <?php } ?>
    <?php }?>
</body>
</html>
cod empleado
<input type="number" name="codigo" value="<?= date("Y000")+$_SESSION['count_vet']+1 ?>" readonly>