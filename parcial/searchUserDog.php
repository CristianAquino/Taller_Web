<?php
if ($_REQUEST['name']) {
    $UsuarioName = $_REQUEST['name'];
    $UsuarioId = $_SESSION['user_id'];
    $SDog = "select * from perro where usuarioForen = '$UsuarioId' and namedog='$UsuarioName'";
    $Sresult = mysqli_query($conn, $SDog);
    $Srow = mysqli_num_rows($Sresult);
} else {
    $Usuario = $_SESSION['user_id'];
    $SDog = "select * from perro where usuarioForen = '$Usuario'";
    $Sresult = mysqli_query($conn, $SDog);
    $Srow = mysqli_num_rows($Sresult);
}
?>
<div class="formRegister formSearch">
    <form class="search" action="" method="GET">
        <h3>Buscar Perro</h3>
        <input type="text" name="name" placeholder="Nombre Perro">
        <input type="submit" value="Buscar">
    </form>
</div>
<?php if (!$Srow) : ?>
    <h3>No se encontro Perro</h3>
<?php else : ?>
    <h3>Mascotas Registradas: <?= $Srow ?></h3>
    <div class="diagnostico searchDiag">
        <table>
            <tr>
                <th>Codigo Perro</th>
                <th>Nombre Perro</th>
                <th>raza del Perro</th>
                <th>Accion</th>
            </tr>
            <?php while ($Sdata = mysqli_fetch_array($Sresult)) : ?>
                <tr>
                    <td><?= $Sdata['codPerro'] ?></td>
                    <td><?= $Sdata['nameDog'] ?></td>
                    <td><?= $Sdata['raza'] ?></td>
                    <td><a href="dashboard5.php?id=<?= $Sdata['idPerro'] ?>">Ver</a></td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>
<?php endif; ?>