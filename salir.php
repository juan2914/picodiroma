<?php
require("./conexion.php");
unset($_SESSION['user']);
header("Location:index");
?>