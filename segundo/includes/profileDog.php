<?php
$Dprofile = $_GET['id'];
$DogProfile = "SELECT * FROM perro where idPerro = '$Dprofile'";
$Dresult = mysqli_query($conn, $DogProfile);
$Ddata = mysqli_fetch_array($Dresult);
?>
<h3>Perfil Perro</h3>
<div class="profile">
    <div class="imgBx imgProfile">
        <?php if($Ddata['foto']): ?>
            <img src="<?= $Ddata['foto'] ?>" alt="">
        <?php else: ?>
            <img src="img/ejemplo.jpg" alt="">
        <?php endif; ?>
    </div>
    <div class="datos">
        <div class="box boxDog boxProfile">
            <span>Codigo Mascota</span>
            <p><?= $Ddata['codPerro'] ?></p>
        </div>
        <div class="box boxDog boxProfile">
            <span>Nombre Mascota</span>
            <p><?= $Ddata['nameDog'] ?></p>
        </div>
        <div class="box boxDog boxProfile">
            <span>Fecha De Nacimiento De La Mascota</span>
            <p><?= $Ddata['fechaNacimiento'] ?></p>
        </div>
        <div class="box boxDog boxProfile">
            <span>Raza De La Mascota</span>
            <p><?= $Ddata['raza'] ?></p>
        </div>
        <div class="box boxDog boxProfile">
            <span>Genero De La Mascota</span>
            <?php if($Ddata['genero']=='0'):?>
                <p><?= 'Hembra' ?></p>
            <?php else: ?>
                <p><?= 'Macho' ?></p>
            <?php endif; ?>
        </div>
        <?php if($_SESSION['user_type']=='1'):?>
        <a href="dashboard7.php?id=<?= $Ddata['idPerro'] ?>">Diagnosticar</a>
        <?php endif;?>
    </div>
</div>
<?php
$DiagProfile = "SELECT * FROM diagnostico join users on diagnostico.vetForen = users.idUser where perForen = '$Dprofile'";
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
            <th>Nombre Veterinario</th>
            <th>Correo Veterinario</th>
            <th>Accion</th>
        </tr>
        <?php while($Diagdata = mysqli_fetch_array($Diagresult)):?>
        <tr>
            <td><?= $Diagdata['codDiagnostico'] ?></td>
            <td><?= $Diagdata['username'] ?></td>
            <td><?= $Diagdata['email'] ?></td>
            <td><a href="dashboard6.php?id=<?= $Diagdata['idDiagnostico'] ?>">Ver</a></td>
        </tr>
        <?php endwhile; ?>
    </table>
</div>
<?php endif; ?>