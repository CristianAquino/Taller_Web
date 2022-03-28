<?php include('includes/header.php') ?>
<div class="dashboard">
    <!-- NEW -->
    <?php if($_SESSION['mensaje_dash']):?>
    <div class="dash">
        <h2><?= $_SESSION['mensaje_dash'] ?></h2>
    </div>
    <?php unset($_SESSION['mensaje_dash']); endif; ?>
    <?php include('includes/menu.php') ?>
    <div class="page">
        <?php include('registerDog.php') ?>
    </div>
</div>
<?php include('includes/footer.php') ?>