<?php include('db.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <header>
            <?php if(isset($_SESSION['user_name'])):?>
                <nav class="menu" style="display: flex;">
                    <p>Hola <?= $_SESSION['user_name'] ?></p>
            <?php else:?>
                    <nav class="menu">
            <?php endif;?>
                <ul>
                    <li><a href="home.php">Home</a></li>
                <?php if(isset($_SESSION['user_id'])):?>
                    <li><a href="register.php">Registro</a></li>
                    <li><a href="consult.php">Consulta</a></li>
                    <li><a href="logout.php">Logout</a></li>
                <?php else:?>
                    <li><a href="login.php">Login</a></li>
                <?php endif;?>
                </ul>
            </nav>
        </header>
        <div class="content">