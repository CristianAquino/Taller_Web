<?php
// $profile = $_SESSION['user_id'];
$profile = $_GET['id'];
$uProfile = "select * from perro join(SELECT idDiagnostico, codDiagnostico, perForen, vetForen from diagnostico) as diagnostico on perro.idPerro = diagnostico.perForen join (SELECT idUser, username, email from users) as users on diagnostico.vetForen = users.idUser where perro.idPerro = '$profile'";
$result = mysqli_query($conn, $uProfile);
$row = mysqli_num_rows($result);
$data = mysqli_fetch_array($result);
?>
<h3>Perfil Perro</h3>
<div class="profile">
    <div class="imgBx imgProfile">
        <?php if($data['foto']): ?>
            <img src="<?= $data['foto'] ?>" alt="">
        <?php else: ?>
            <img src="img/ejemplo.jpg" alt="">
        <?php endif; ?>
    </div>
    <div class="datos">
        <div class="box boxDog boxProfile">
            <span>Codigo Mascota</span>
            <p><?= $data['codPerro'] ?></p>
        </div>
        <div class="box boxDog boxProfile">
            <span>Nombre Mascota</span>
            <p><?= $data['nameDog'] ?></p>
        </div>
        <div class="box boxDog boxProfile">
            <span>Fecha De Nacimiento De La Mascota</span>
            <p><?= $data['fechaNacimiento'] ?></p>
        </div>
        <div class="box boxDog boxProfile">
            <span>Raza De La Mascota</span>
            <p><?= $data['raza'] ?></p>
        </div>
        <div class="box boxDog boxProfile">
            <span>Genero De La Mascota</span>
            <?php if($data['genero']=='0'):?>
                <p><?= 'Hembra' ?></p>
            <?php else: ?>
                <p><?= 'Macho' ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php if(!$data['codDiagnostico']):?>
<h3>No se encontro historial</h3>
<?php else: ?>
<h3>Historial</h3>
<div class="diagnostico">
    <table>
        <tr>
            <th>Codigo Diagnostico</th>
            <th>Nombre Veterinario</th>
            <th>Correo Veterinario</th>
            <th>Accion</th>
        </tr>
        <?php for($i=0; $i<$row; $i++):?>
        <tr>
            <td><?= $data['codDiagnostico'] ?></td>
            <td><?= $data['username'] ?></td>
            <td><?= $data['email'] ?></td>
            <td><a href="#?id=<?= $data['idDiagnostico'] ?>">Ver</a></td>
        </tr>
        <?php endfor; ?>
    </table>
</div>
<?php endif; ?>