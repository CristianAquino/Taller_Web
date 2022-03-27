<div class="formRegister">
    <form action="registerNewEmp.php" method="POST">
        <h3>Registrar Empleado</h3>
        <input type="text" name="username" placeholder="Username">
        <input type="email" name="email" placeholder="Email">
        <input type="number" name="dni" placeholder="DNI">
        <input type="password" name="password" placeholder="Contraseña">
        <!-- Agregado -->
        <?php if ($_SESSION['error_emp_pass']) : ?>
        <div class="box signin <?= $_SESSION['error_emp_class'] ?>">
            <h2><?= $_SESSION['error_emp_pass'] ?></h2>
        </div>
        <?php unset($_SESSION['error_emp_pass']);unset($_SESSION['error_emp_class']); endif; ?>
        <div class="box boxDog">
            <span>Seleccione un tipo de empleado</span>
            <select name="type">
                <option value="0"> Administrador
                <option value="1"> Veterinario
            </select>
        </div>
        <!-- Agregado -->
        <?php if ($_SESSION['error_emp_dni']) : ?>
        <div class="box signin <?= $_SESSION['error_emp_class'] ?>">
            <h2><?= $_SESSION['error_emp_dni'] ?></h2>
        </div>
        <?php unset($_SESSION['error_emp_dni']);unset($_SESSION['error_emp_class']); endif; ?>
        <input type="submit" value="Ingresar">
    </form>
</div>