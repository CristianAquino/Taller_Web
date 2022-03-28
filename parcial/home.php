<?php include('includes/header.php') ?>
<div class="contenedor">
    <div class="home" id="home">
        <div class="text">
            <h1>Registro local canino</h1>
            <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi laboriosam enim dicta expedita dolorum neque dolores delectus esse excepturi eligendi quo quia veniam nostrum facere perspiciatis magnam, odio tenetur! Distinctio?</h3>
        </div>
        <div class="imgBx">
            <img src="img/dog1.jpg" alt="">
        </div>
    </div>
    <div class="ingresar" id="ingresar">
        <div class="imgBx">
            <img src="img/dog2.jpeg" alt="">
        </div>
        <div class="formBx">
            <div class="form signinForm">
                <form action="login.php" method="POST">
                    <h3>Ingresar cuenta</h3>
                    <input type="number" name="dni" placeholder="DNI">
                    <input type="password" name="password" placeholder="Contraseña">
                    <!-- Agregado -->
                    <?php if($_SESSION['error_login']): ?>
                    <div class="box signin <?= $_SESSION['error_login_class']?>">
                        <h2 style="color: #f00;"><?= $_SESSION['error_login']?></h2>
                    </div>
                    <?php unset($_SESSION['error_login']); unset($_SESSION['error_login_class']); endif; ?>
                    <input type="submit" value="Ingresar">
                </form>
                <div class="box signup">
                    <h2>No tienes una cuenta ?</h2>
                    <button class="signupBtn">Registrarse</button>
                </div>
            </div>
            <div class="form signupForm">
                <form action="register.php" method="POST">
                    <h3>Crear cuenta</h3>
                    <input type="text" name="username" placeholder="Username">
                    <input type="email" name="email" placeholder="Email">
                    <input type="number" name="dni" placeholder="DNI">
                    <!-- Agregado -->
                    <?php if($_SESSION['error_dni_user']): ?>
                    <div class="box signin <?= $_SESSION['error_dni_class']?>">
                        <h2 style="color: #f00;"><?= $_SESSION['error_dni_user']?></h2>
                    </div>
                    <?php unset($_SESSION['error_dni_user']); unset($_SESSION['error_dni_class']); endif; ?>
                    <input type="password" name="password" placeholder="Contraseña">
                    <!-- Agregado -->
                    <?php if($_SESSION['error_register_user']): ?>
                    <div class="box signin <?= $_SESSION['error_register_class']?>">
                        <h2 style="color: #f00;"><?= $_SESSION['error_register_user']?></h2>
                    </div>
                    <?php unset($_SESSION['error_register_user']); unset($_SESSION['error_register_class']); endif; ?>
                    <input type="submit" value="Registrar">
                </form>
                <div class="box signin">
                    <h2>Ya tienes una cuenta ?</h2>
                    <button class="signinBtn">Ingresar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php') ?>