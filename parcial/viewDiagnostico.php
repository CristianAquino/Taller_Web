<?php
$idPerro=$_GET['id'];
$count = "SELECT * FROM perro join diagnostico on perro.idPerro = diagnostico.perForen where idDiagnostico = '$idPerro'";
$dCount = mysqli_query($conn, $count);
$data = mysqli_fetch_assoc($dCount);
?>
<div class="formRegister">
    <form class="consulta" action="consultaDog.php" method="POST">
        <h3>Diagnostico Medico</h3>
        <input class="newValor" type="text" name="codigo" value="CodDiagnostico: <?= $data['codDiagnostico'] ?>" readonly>
        <input class="newValor" type="text" name="name" value="NOMBRE DE LA MASCOTA: <?= $data['nameDog'] ?>" readonly>
        <textarea class="newValor" name="sangre" readonly>DIAGNOSTICO DE SANGRE: <?= $data['sangre'] ?></textarea>
        <textarea class="newValor" name="medicina" readonly>MEDICAMENTOS: <?= $data['medicamentos'] ?></textarea>
        <div class="box boxDog .boxConsult">
            <span>Imagen Rayos X</span>
            <input class="newValor" class="archivo" type="text" name="foto" value="<?= $data['rayosX'] ?>" readonly>
        </div>
        <input class="newValor" name="costo" value="COSTO: S/<?= $data['costo'] ?>" readonly>
        <input style="visibility: hidden;" type="submit" value="Registrar">
    </form>
    <!-- <div class="imgBx imgRegister">
        <img src="img/ejemplo.jpg" alt="">
    </div> -->
</div>