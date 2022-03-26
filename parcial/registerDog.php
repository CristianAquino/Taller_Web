<?php
$count = "SELECT COUNT(*) as total FROM perro";
$rCount = mysqli_query($conn, $count);
$data = mysqli_fetch_assoc($rCount);
$_SESSION['count_perro'] = $data['total'];
?>
<div class="formRegister">
    <form action="registerNewDog.php" method="POST">
        <h3>Registrar Perro</h3>
        <input type="number" name="codigo" value="<?= date("Y000")+$_SESSION['count_perro']+1 ?>" readonly>
        <input type="text" name="name" placeholder="Nombre Perro">
        <div class="box boxDog">
            <span>Fecha de Nacimiento</span>
            <input type="date" name="fechnac">
        </div>
        <div class="box boxDog boxDirection">
            <span>Genero: </span>
            <div class="radio">
                <input type="radio" name="genero" value="1">
                <span>Macho</span>
                <input type="radio" name="genero" value="0">
                <span>Hembra</span>
            </div>
        </div>
        <div class="box boxDog">
            <span>Seleccione Raza</span>
            <select name="raza">
                <option value="Pitbull"> Pitbull
                <option value="Bulldog"> Bulldog
                <option value="Shichu"> Shichu
                <option value="Pequines"> Pequines
                <option value="San Bernardo"> San Bernardo
                <option value="Chiguahua"> Chiguahua
            </select>
        </div>
        <div class="box boxDog">
            <span>Ingrese URL de la foto</span>
            <input class="archivo" type="text" name="foto">
        </div>
        <input type="submit" value="Registrar">
    </form>
    <div class="imgBx imgRegister">
        <img src="img/ejemplo.jpg" alt="">
    </div>
</div>