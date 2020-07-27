<!DOCTYPE html>
<html>
<?php
	require("static/header.php"); 
?>
<body>
	<h1 class="woocommerce-products-header__title page-title">Tienda</h1>
	<select name="orderby" class="orderby" aria-label="Pedido de la tienda">
					<option value="menu_order" selected="selected">Orden por defecto</option>
					<option value="popularity">Ordenar por popularidad</option>
					<option value="rating">Ordenar por calificación media</option>
					<option value="date">Ordenar por las últimas</option>
					<option value="price">Ordenar por precio: bajo a alto</option>
					<option value="price-desc">Ordenar por precio: alto a bajo</option>
			</select><p class="woocommerce-result-count">
	Mostrando 1–12 de 18 resultados</p>
			<span aria-current="page" class="page-numbers current">1</span>
</body>
</html>