<?php include('db.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="contenedor.css">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="footer.css">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <div class="logo">
            <h3>LOGO</h3>
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