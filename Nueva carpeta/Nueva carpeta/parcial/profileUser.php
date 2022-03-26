<?php
$profile = $_SESSION['user_id'];
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