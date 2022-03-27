<?php
if ($_REQUEST['name']) {
    $UsuarioName = $_REQUEST['name'];
    $SDog = "select * from users where type = '1' and (username='$UsuarioName' or codUser = '$UsuarioName' )";
    $Sresult = mysqli_query($conn, $SDog);
    $Srow = mysqli_num_rows($Sresult);
} else {
    $SDog = "select * from users where type = '1'";
    $Sresult = mysqli_query($conn, $SDog);
    $Srow = mysqli_num_rows($Sresult);
}
?>
<div class="formRegister formSearch">
    <form class="search" action="" method="GET">
        <h3>Buscar Empleado</h3>
        <input type="text" name="name" placeholder="Nombre o codigo de empleado">
        <input type="submit" value="Buscar">
    </form>
</div>
<?php if (!$Srow) : ?>
    <h3>No se encontro Empleado</h3>
<?php else : ?>
    <h3>Empleados Registrados: <?= $Srow ?></h3>
    <div class="diagnostico searchDiag">
        <table>
            <tr>
                <th>Codigo Empleado</th>
                <th>Nombre Empleado</th>
                <th>DNI empleado</th>
                <th>Accion</th>
            </tr>
            <?php while ($Sdata = mysqli_fetch_array($Sresult)) : ?>
                <tr>
                    <td><?= $Sdata['codUser'] ?></td>
                    <td><?= $Sdata['username'] ?></td>
                    <td><?= $Sdata['dni'] ?></td>
                    <td><a href="dashboard9.php?id=<?= $Sdata['idUser'] ?>">Ver</a></td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>
<?php endif; ?>