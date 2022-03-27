<div class="navigation">
    <ul>
        <!-- <li class="list active"> -->
        <li class="list">
            <a href="dashboard1.php">
                <span class="icon">
                    <i class="fa-solid fa-user"></i>
                    <!-- <ion-icon name="person-outline"></ion-icon> -->
                </span>
                <span class="title">Perfil de Usuario</span>
            </a>
        </li>
        <?php if($_SESSION['user_type']=== '0'):?>
        <li class="list">
            <a href="dashboard2.php">
                <span class="icon">
                    <i class="fa-solid fa-user-plus"></i>
                    <!-- <ion-icon name="person-add-outline"></ion-icon> -->
                </span>
                <span class="title">Crear Usuario</span>
            </a>
        </li>
        <li class="list">
            <a href="dashboard8.php">
                <span class="icon">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <!-- <ion-icon name="person-add-outline"></ion-icon> -->
                </span>
                <span class="title">Buscar Empleado</span>
            </a>
        </li>
        <?php endif; ?>
        <?php if($_SESSION['user_type']=== '1'):?>
        <li class="list">
            <a href="dashboard4.php">
                <span class="icon">
                    <i class="fa-solid fa-file-medical"></i>
                    <!-- <ion-icon name="newspaper-outline"></ion-icon> -->
                </span>
                <span class="title">Diagnosticar</span>
            </a>
        </li>
        <?php endif; ?>
        <?php if($_SESSION['user_type']=== '2'):?>
        <li class="list">
            <a href="dashboard3.php">
                <span class="icon">
                    <i class="fa-solid fa-dog"></i>
                    <!-- <ion-icon name="newspaper-outline"></ion-icon> -->
                </span>
                <span class="title">Registrar Perro</span>
            </a>
        </li>
        <li class="list">
            <a href="dashboard4.php">
                <span class="icon">
                    <i class="fa-solid fa-paw"></i>
                    <!-- <ion-icon name="newspaper-outline"></ion-icon> -->
                </span>
                <span class="title">Buscar Perro</span>
            </a>
        </li>
        <?php endif; ?>
        <li class="list">
            <a href="logout.php">
                <span class="icon">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    <!-- <ion-icon name="log-out-outline"></ion-icon> -->
                </span>
                <span class="title">Cerrar Sesion</span>
            </a>
        </li>
    </ul>
</div>