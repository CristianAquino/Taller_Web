<?php
$idPerro=$_GET['id'];
$count = "SELECT * FROM perro join diagnostico on perro.idPerro = diagnostico.perForen where idDiagnostico = '$idPerro'";
$dCount = mysqli_query($conn, $count);
$data = mysqli_fetch_assoc($dCount);
?>
<div class="formRegister">
    <form class="consulta" action="consultaDog.php" method="POST">
        <h3>Diagnostico Medico</h3>
        <input type="text" name="codigo" value="<?= $data['codDiagnostico'] ?>" readonly>
        <input type="text" name="name" value="<?= $data['nameDog'] ?>" readonly>
        <textarea name="sangre" readonly><?= $data['sangre'] ?></textarea>
        <textarea name="medicina" readonly><?= $data['medicamentos'] ?></textarea>
        <div class="box boxDog .boxConsult">
            <span>Ingrese URL de imagen Rayos X</span>
            <input class="archivo" type="text" name="foto" value="<?= $data['rayosX'] ?>" readonly>
        </div>
        <input name="costo" value="<?= $data['rayosX'] ?>" readonly>
        <input style="visibility: hidden;" type="submit" value="Registrar">
    </form>
    <!-- <div class="imgBx imgRegister">
        <img src="img/ejemplo.jpg" alt="">
    </div> -->
</div>