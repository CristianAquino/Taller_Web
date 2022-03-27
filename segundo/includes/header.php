<?php include('db.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/contenedor.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/registerDog.css">
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/searchDog.css">
    <link rel="stylesheet" href="css/consulta.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Document</title>
</head>
<body>
    <!-- NEW -->
    <?php if($_SESSION['mensaje_register']):?>
    <div class="mensaje <?= $_SESSION['mensaje_class']?>">
        <h2><?= $_SESSION['mensaje_register'] ?></h2>
    </div>
    <?php unset($_SESSION['mensaje_register']);unset($_SESSION['mensaje_class']); endif; ?>
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