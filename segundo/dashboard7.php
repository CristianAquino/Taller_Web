<?php include('includes/header.php') ?>
<div class="dashboard">
    <!-- NEW -->
    <?php if($_SESSION['mensaje_dash']):?>
    <div class="mensaje <?=$_SESSION['class_dash']?>">
        <h2><?= $_SESSION['mensaje_dash'] ?></h2>
    </div>
    <?php unset($_SESSION['mensaje_dash']);unset($_SESSION['class_dash']); endif; ?>
    <?php include('includes/menu.php') ?>
    <div class="page">
        <?php include('includes/consulta.php') ?>
    </div>
</div>
<?php include('includes/footer.php') ?>