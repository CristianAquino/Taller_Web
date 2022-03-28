<?php include('db.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="contenedor.css">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="registerDog.css">
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="searchDog.css">
    <link rel="stylesheet" href="consulta.css">
    <link rel="stylesheet" href="footer.css">
    <title>Document</title>
</head>
<body>
    <!-- NEW -->
    <?php if($_SESSION['mensaje_register']):?>
    <div class="mensaje">
        <h2><?= $_SESSION['mensaje_register'] ?></h2>
    </div>
    <?php unset($_SESSION['mensaje_register']); endif; ?>
    <header class="header">
        <div class="logo">
            <h3 style="margin-bottom: 0;">LOGO</h3>
        </div>
        <?php if($_SESSION['user_name']):?>
            <div class="bienvenido">
                <p>Bienvenido <?= $_SESSION['user_name'] ?></p>
            </div>
            <ul style="display: none;">
                <li>
                    <a href="home.php">Home</a>
                </li>
                <li>
                    <a href="#ingresar">Ingresar</a>
                </li>
            </ul>
        <?php else: ?>
        <ul>
            <li>
                <a href="home.php">Home</a>
            </li>
            <li>
                <a href="#ingresar">Ingresar</a>
            </li>
        </ul>
        <?php endif;?>
    </header>