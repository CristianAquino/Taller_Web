<?php include('db.php') ?>
<?php include('includes/header.php') ?>
    <div class="about">
    <h1>Registro</h1>
        <?php if(isset($_SESSION['message_registro'])):?>
            <p class="mensaje <?= $_SESSION['message_registro_class']?>"><?= $_SESSION['message_registro']?></p>
        <?php unset($_SESSION['message_registro']); endif;?>    
        <div class="prueba">
            <form action="registrarPerro.php" method="GET">
                <div class="inputBox">
                    <input type="text" name = "Codigo" placeholder="Ingresar Codigo">
                </div>
                <div class="inputBox">
                    <input type="text" name="Nombre" placeholder="Ingresar Nombre">
                </div>
                <div class="inputFecha">
                    <span>Fecha de Nacimiento</span>
                    <input type="date" name="FechNac">
                </div>
                <div class="inputRadio">
                    <span>Genero</span>
                    <div class="radio">
                        <input type="radio" name="Genero" value="1">
                        <span>Macho</span>
                        <input type="radio" name="Genero" value="0">
                        <span>Hembra</span>
                    </div>
                </div>
                <div class="inputSelect">
                    <span>Seleccione Raza</span>
                    <select name = "Raza">
                        <option value = "Pitbull"> Pitbull
                        <option value = "Bulldog"> Bulldog
                        <option value = "Shichu"> Shichu
                        <option value = "Pequines"> Pequines
                        <option value = "San Bernardo"> San Bernardo
                        <option value = "Chiguahua"> Chiguahua
                    </select>
                </div>
                <div class="inputFoto">
                    <span>Ingrese URL de foto</span>
                    <input class="archivo" type ="text" name="Foto">
                </div>
                <div class="inputBoton">
                    <input type="submit" name= "Registrar" value = "Registrar">
                    <button class="cancelar">Cancelar</button>
                </div>
            </form>
            <div class="imgBx perro">
                <img src="img/ejemplo.jpg" alt="">
            </div>
        </div>
    </div>
<?php include('includes/footer.php') ?>