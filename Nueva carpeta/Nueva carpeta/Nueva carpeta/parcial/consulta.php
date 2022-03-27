<?php
$_SESSION['perro_id']=$_GET['id'];
$NPerro = $_SESSION['perro_id'];
$count1 = "SELECT COUNT(*) as total FROM diagnostico";
$dCount1 = mysqli_query($conn, $count1);
$data1 = mysqli_fetch_assoc($dCount1);
$count2 = "SELECT nameDog FROM perro where idPerro = '$NPerro'";
$dCount2 = mysqli_query($conn, $count2);
$data2 = mysqli_fetch_assoc($dCount2);
?>
<div class="formRegister">
    <form class="consulta" action="consultaDog.php" method="POST">
        <h3>Diagnostico Medico</h3>
        <input type="text" name="codigo" value="<?= 'Diag'.(date("Y000")+$data1['total']+1) ?>" readonly>
        <input type="text" name="name" value="<?= $data2['nameDog'] ?>" readonly>
        <textarea name="sangre" placeholder="Analisis de sangre"></textarea>
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