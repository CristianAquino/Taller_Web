<?php include('includes/header.php') ?>
<div class="dashboard">
    <?php include('includes/menu.php') ?>
    <div class="page">
    <?php if($_SESSION['user_type']=='1'): ?>
        <?php include('includes/searchVetDog.php') ?>
    <?php else: ?>
        <?php include('includes/searchUserDog.php') ?>
    <?php endif; ?>
    </div>
</div>
<?php include('includes/footer.php') ?>