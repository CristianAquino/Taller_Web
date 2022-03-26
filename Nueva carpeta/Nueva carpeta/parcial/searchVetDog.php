<?php
if($_REQUEST['name']){
    $Usuario = $_REQUEST['name'];
}
$SVDog = "select * from perro join users on perro.usuarioForen = users.idUser where nameDog = '$Usuario' or codPerro = '$Usuario'";
$SVresult = mysqli_query($conn, $SVDog);
$SVrow = mysqli_num_rows($SVresult);
?>
<div class="formRegister formSearch">
    <form class="search" action="" method="GET">
        <h3>Buscar Mascota Para Realizar un Diagnostico</h3>
        <input type="text" name="name" placeholder="Ingrese Nombre o codigo de la Mascota">
        <input type="submit" value="Buscar">
    </form>
</div>
<?php if($SVrow):?>
<h3>Mascotas Encontradas</h3>
<div class="diagnostico searchDiag">
    <table>
        <tr>
            <th>Codigo Perro</th>
            <th>Nombre Dueño</th>
            <th>Nombre Perro</th>
            <th>raza del Perro</th>
            <th>Accion</th>
        </tr>
        <?php while($SVdata = mysqli_fetch_array($SVresult)):?>
        <tr>
            <td><?= $SVdata['codPerro'] ?></td>
            <td><?= $SVdata['username'] ?></td>
            <td><?= $SVdata['nameDog'] ?></td>
            <td><?= $SVdata['raza'] ?></td>
            <td><a href="dashboard5.php?id=<?= $SVdata['idPerro'] ?>">Ver</a></td>
        </tr>
        <?php endwhile; ?>
    </table>
</div>
<?php endif; ?>