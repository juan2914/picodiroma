<!DOCTYPE html>
<html lang="en">

<?php require('.static/cabecera.php');
require('./conexion.php');?>
<body>
    <p>Hola <?php

                echo htmlentities($_SESSION['user']['email']." ".$_SESSION['user']['usuario']);
                ?> </p>
              <a href="informacion.php" >perfil</a>
				

<?php
require("./static/footer.php");
?>				
</body>
</html>