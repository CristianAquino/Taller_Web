<?php
if($_REQUEST['name']){
    $Usuario = $_REQUEST['name'];
}else{
    $Usuario = $_SESSION['user_id'];
}
$sDog = "select * from perro where usuarioForen = '$Usuario' or nameDog = '$Usuario'";
$result = mysqli_query($conn, $sDog);
$row = mysqli_num_rows($result);
$data = mysqli_fetch_array($result);
?>
<div class="formRegister formSearch">
    <form class="search" action="" method="POST">
        <h3>Buscar Perro</h3>
        <input type="text" name="name" placeholder="Nombre Perro">
        <input type="submit" value="Buscar">
    </form>
</div>
<?php if(!$data['idPerro']):?>
<h3>No se encontro Perro</h3>
<?php else: ?>
<h3>Mascotas Registradas</h3>
<div class="diagnostico searchDiag">
    <table>
        <tr>
            <th>Codigo Perro</th>
            <th>Nombre Perro</th>
            <th>raza del Perro</th>
            <th>Accion</th>
        </tr>
        <?php for($i=0; $i<$row; $i++):?>
        <tr>
            <td><?= $data['codPerro'] ?></td>
            <td><?= $data['nameDog'] ?></td>
            <td><?= $data['raza'] ?></td>
            <td><a href="dashboard5.php?id=<?= $data['idPerro'] ?>">Ver</a></td>
        </tr>
        <?php endfor; ?>
    </table>
</div>
<?php endif; ?>