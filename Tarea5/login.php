<?php include('includes/header.php') ?>
<div class="container1">
        <div class="blueBg">
            <div class="box signin">
                <h2>Already Have an Account ?</h2>
                <button class="signinBtn">Sign in</button>
            </div>
            <div class="box signup">
                <h2>Don't Have an Account ?</h2>
                <button class="signupBtn">Sign up</button>
            </div>
        </div>
        <?php if(isset($_SESSION['error'])):?>
            <div class="formBx active">
        <?php else: ?>
            <div class="formBx">
        <?php endif;?>
            <div class="form signinForm">
                <form action="loginUser.php" method="POST">
                    <h3>Signin In</h3>
                    <input type="email" name="email" placeholder="Email Address">
                    <input type="password" name="password" placeholder="Password">
                    <?php if(isset($_SESSION['login'])):?>
                        <p style="color:#f00;border:none;margin-bottom:10px"><?= $_SESSION['login']?></p>
                    <?php endif;?>
                    <input type="submit" value="Login">
                </form>
            </div>
            <div class="form signupForm <?= $_SESSION['message_registro_class']?>">
                <form action="singupUser.php" method="POST"> 
                    <h3>Signin Up</h3>
                    <input type="text" name="user" placeholder="Username">
                    <input type="email" name="email" placeholder="Email Address">
                    <input type="password" name="password" placeholder="Password">
                    <!-- <input type="password" placeholder="Confirm Passeord"> -->
                    <?php if(isset($_SESSION['error'])):?>
                        <p style="color:#f00;border:none;margin-bottom:10px"><?= $_SESSION['error']?></p>
                    <?php endif;?>
                    <input type="submit" value="Register">
                </form>
            </div>
        </div>
    </div>
<?php include('includes/footer.php') ?>