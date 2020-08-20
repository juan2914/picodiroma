 <?php
// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';

// Agrega credenciales
MercadoPago\SDK::setAccessToken('APP_USR-129769256075069-081918-5543b8c7ed3456537c1140dd73607012-628298395');

// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = 'Mi producto';
$item->quantity = 1;
$item->unit_price = .01;
$preference->items = array($item);
$preference->save();

 //curl -X POST -H "Content-Type: application/json" "https://api.mercadopago.com/users/test_user?access_token=TEST-129769256075069-081915-033dd98514f0af096758a5cc401e7e3c-628298395" -d "{'site_id':'MLM'}"
 //{"id":628371390,"nickname":"TEST1JCCMUMV","password":"qatest3943","site_status":"active","email":"test_user_15000497@testuser.com"}//
 //{"id":628374277,"nickname":"TESTJVNPDORZ","password":"qatest1583","site_status":"active","email":"test_user_75841602@testuser.com"}//vendedorcomprador
?>
  


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="/procesar-pago" method="POST">
  <script
   src="https://www.mercadopago.com.mx/integrations/v1/web-payment-checkout.js"
   data-preference-id="<?php echo $preference->id;?>">
  </script>
</form>
</body>
</html>