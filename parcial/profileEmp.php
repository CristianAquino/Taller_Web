<?php
$profile = $_GET['id'];
$uProfile = "SELECT * FROM users where idUser = $profile";
$result = mysqli_query($conn, $uProfile);
$data = mysqli_fetch_assoc($result);
?>
<h3>Perfil Usuario</h3>
<div class="profile">
    <div class="imgBx imgProfile">
        <img src="img/user.jpg" alt="">
    </div>
    <div class="datos">
        <div class="box boxDog boxProfile">
            <span>Codigo de Usuario</span>
            <p><?= $data['codUser'] ?></p>
        </div>
        <div class="box boxDog boxProfile">
            <span>Nombre de Usuario</span>
            <p><?= $data['username'] ?></p>
        </div>
        <div class="box boxDog boxProfile">
            <span>Email de Usuario</span>
            <p><?= $data['email'] ?></p>
        </div>
        <div class="box boxDog boxProfile">
            <span>DNI de Usuario</span>
            <p><?= $data['dni'] ?></p>
        </div>
    </div>
</div>
<?php if($_GET['id']): ?>
<?php
$DiagProfile = "SELECT * FROM diagnostico join perro on perro.idPerro=diagnostico.perForen join users on perro.usuarioForen = users.idUser where vetForen = '$profile'";
$Diagresult = mysqli_query($conn, $DiagProfile);
$Diagrow = mysqli_num_rows($Diagresult);
?>
<?php if(!$Diagrow):?>
<h3>No se encontro historial de Diagnosticos</h3>
<?php else: ?>
<h3>N° de Diagnosticos: <?= $Diagrow ?></h3>
<div class="diagnostico">
    <table>
        <tr>
            <th>Codigo Diagnostico</th>
            <th>Nombre Dueño</th>
            <th>Nombre del Perro</th>
            <th>Accion</th>
        </tr>
        <?php while($Diagdata = mysqli_fetch_array($Diagresult)):?>
        <tr>
            <td><?= $Diagdata['codDiagnostico'] ?></td>
            <td><?= $Diagdata['username'] ?></td>
            <td><?= $Diagdata['nameDog'] ?></td>
            <td><a href="dashboard6.php?id=<?= $Diagdata['idDiagnostico'] ?>">Ver</a></td>
        </tr>
        <?php endwhile; ?>
    </table>
</div>
<?php endif; ?>
<?php endif;?>