<?php include('db.php') ?>
<?php include('includes/header.php') ?>
<div class="contact">
    <h1>Consulta</h1>
    <div class="contactme">
        <form class="form" action="" method="GET">
            <input type="text" name="Nombre" placeholder="Ingrese Nombre a buscar">
            <input type="submit" name="Buscar" value="Buscar">
        </form>
        <div class="doc">
        <?php
            if (isset($_GET['Buscar'])){
                $v2 = $_GET['Nombre'];    
                $sql = "select * from perrouser where Nombre like '$v2%'";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_array($result)){?>
                <div class="mostrar">
                    <div class="imgBx">
                        <?php if($row['Foto']) {?>
                            <img src=<?php echo $row['Foto'] ?> alt="">
                        <?php }else{?>
                            <img src="img/ejemplo.jpg" alt="">
                        <?php }?>
                    </div>
                    <div class="salida">
                        <div class="data">
                            <h3>DNI</h3>
                            <span><?php echo $row['DNI'] ?></span>
                        </div>
                        <div class="data">
                            <h3>Nombre</h3>
                            <span><?php echo $row['Nombre'] ?></span>
                        </div>
                        <div class="data">
                            <h3>Nacimiento</h3>
                            <span><?php echo $row['FechaNacimiento'] ?></span>
                        </div>
                        <div class="data">
                            <h3>Raza</h3>
                            <span><?php echo $row['Raza'] ?></span>
                        </div>
                        <div class="data">
                            <h3>Genero</h3>
                            <?php if($row['Genero'] == '0') {?>
                                <span><?= 'Hembra' ?></span>
                            <?php }else{?>
                                <span><?= 'Macho' ?></span>
                            <?php }?>
                        </div>
                    </div>
                    <?php }?>
                <div>
            <?php }?>
        </div>
    </div>
</div>
<?php include('includes/footer.php') ?>