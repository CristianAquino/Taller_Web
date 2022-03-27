<div class="navigation">
    <ul>
        <li class="list active">
            <a href="dashboard1.php">
                <span class="icon">
                    <ion-icon name="person-outline"></ion-icon>
                </span>
                <span class="title">Profile</span>
            </a>
        </li>
        <?php if($_SESSION['user_type']=== '0'):?>
        <li class="list">
            <a href="dashboard2.php">
                <span class="icon">
                    <ion-icon name="person-add-outline"></ion-icon>
                </span>
                <span class="title">Create Users</span>
            </a>
        </li>
        <?php endif; ?>
        <?php if($_SESSION['user_type']=== '1'):?>
        <li class="list">
            <a href="dashboard4.php">
                <span class="icon">
                    <ion-icon name="newspaper-outline"></ion-icon>
                </span>
                <span class="title">Diagnosticar</span>
            </a>
        </li>
        <?php endif; ?>
        <?php if($_SESSION['user_type']=== '2'):?>
        <li class="list">
            <a href="dashboard3.php">
                <span class="icon">
                    <ion-icon name="newspaper-outline"></ion-icon>
                </span>
                <span class="title">Register Dog</span>
            </a>
        </li>
        <li class="list">
            <a href="dashboard4.php">
                <span class="icon">
                    <ion-icon name="newspaper-outline"></ion-icon>
                </span>
                <span class="title">Search Dog</span>
            </a>
        </li>
        <?php endif; ?>
        <li class="list">
            <a href="logout.php">
                <span class="icon">
                    <ion-icon name="log-out-outline"></ion-icon>
                </span>
                <span class="title">Sign Out</span>
            </a>
        </li>
    </ul>
</div>