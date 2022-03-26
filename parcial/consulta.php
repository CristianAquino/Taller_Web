<?php
$idPerro=$_GET['idPerro'];
$count = "SELECT COUNT(*) as total, (Select nameDog from perro where idPerro = '1') as namePerro FROM diagnostico";
$dCount = mysqli_query($conn, $count);
$data = mysqli_fetch_assoc($dCount);
$_SESSION['count_diag'] = $data['total'];
?>
<div class="formRegister">
    <form class="consulta" action="consultaDog.php" method="POST">
        <h3>Consulta Medica</h3>
        <input type="text" name="codigo" value="<?= 'Diag'.(date("Y000")+$_SESSION['count_diag']+1) ?>" readonly>
        <input type="text" name="name" value="<?= $data['namePerro'] ?>" readonly>
        <!-- <input type="text" name="name" placeholder="Analisis de sangre"> -->
        <textarea name="sangre" placeholder="Analisis de sangre"></textarea>
        <!-- <input type="text" name="name" placeholder="Medicamentos"> -->
        <textarea name="medicina" placeholder="Medicamentos"></textarea>
        <div class="box boxDog .boxConsult">
            <span>Ingrese URL de imagen Rayos X</span>
            <input class="archivo" type="text" name="foto">
        </div>
        <input type="number" name="costo" placeholder="Costo">
        <input type="submit" value="Registrar">
    </form>
    <!-- <div class="imgBx imgRegister">
        <img src="img/ejemplo.jpg" alt="">
    </div> -->
</div>