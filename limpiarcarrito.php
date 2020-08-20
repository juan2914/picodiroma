<?php 
require("./conexion.php");
if(!empty($_SESSION['carrito'])){

header("location: ./carrilleno"); 

}
unset($_SESSION['carrito']);
$_SESSION['carrito'] = array(); 
header("location: ./carrilleno"); 	

?>

