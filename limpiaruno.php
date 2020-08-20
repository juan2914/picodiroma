<?php 
require("./conexion.php");



$a=($_GET['id']);
unset($_SESSION['carrito'][$a]);
sort($_SESSION['carrito']);
print_r( $_SESSION['carrito']);

header("location: ./carrilleno"); 
	
?>

