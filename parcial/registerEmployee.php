<div class="formRegister">
    <form action="registerNewEmp.php" method="POST">
        <h3>Registrar Empleado</h3>
        <input type="text" name="username" placeholder="Username">
        <input type="email" name="email" placeholder="Email">
        <input type="number" name="dni" placeholder="DNI">
        <input type="password" name="password" placeholder="Contraseña">
        <div class="box boxDog">
            <span>Seleccione un tipo de empleado</span>
            <select name="type">
                <option value="0"> Administrador
                <option value="1"> Veterinario
            </select>
        </div>
        <input type="submit" value="Ingresar">
    </form>
</div>