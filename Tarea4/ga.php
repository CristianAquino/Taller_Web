<?php
            if (isset($_GET['Buscar'])){
                $v2 = $_GET['Nombre'];    
                $sql = "select * from Perro where Nombre like '$v2%'";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_array($result)){?>
                    <p><h2>DNI:</h2><?php echo $row['DNI'] ?></p>
                    <p><h2>Nombre:</h2><?php echo $row['Nombre'] ?></p>
                    <p><h2>Nacimiento</h2><?php echo $row['FechaNacimiento'] ?></p>
                    <p><h2>Raza</h2><?php echo $row['Raza'] ?></p>
                    <?php if($row['Genero'] == '0') {?>
                        <p><h2>Genero:</h2><?= 'Hembra' ?></p>
                    <?php }else{?>
                        <p><h2>Genero:</h2><?= 'Macho' ?></p>
                    <?php }?>
                    <p> <img src=<?php echo $row['Foto'] ?>><?php echo $row['Foto'] ?></p>
                <?php }?>
            <?php }?>
<!-- <div class="imgBx">
                <img src="../img/dog.jpg" alt="">
            </div>
            <div class="salida">
                <div class="data">
                    <h3>DNI</h3>
                    <span>123456789</span>
                </div>
                <div class="data">
                    <h3>Nombre</h3>
                    <span>Pelu</span>
                </div>
                <div class="data">
                    <h3>Nacimiento</h3>
                    <span>12-34-56</span>
                </div>
                <div class="data">
                    <h3>Raza</h3>
                    <span>perro</span>
                </div>
                <div class="data">
                    <h3>Genero</h3>
                    <span>Macho</span>
                </div>
            </div> -->

            <img src=<?php echo $row['Foto'] ?> alt="">