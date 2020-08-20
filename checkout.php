
<!DOCTYPE html>
<html>


<?php 

require("./conexion.php");   

?>
  <link rel="shortcut icon" href="assets\img\portfolio\pico.logo.png" />
  <title>Pico Di Roma</title>
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/brands.min.css" integrity="sha512-AMDXrE+qaoUHsd0DXQJr5dL4m5xmpkGLxXZQik2TvR2VCVKT/XRPQ4e/LTnwl84mCv+eFm92UG6ErWDtGM/Q5Q==" crossorigin="anonymous" />
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">




  <!-- =======================================================
  * Template Name: Remember - v2.1.0
  * Template URL: https://bootstrapmade.com/remember-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
  <body>
  


   <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i><a href="mailto:contact@example.com" style="color:#aca18c">hola@picodiroma.com</a>
        <i class="icofont-phone"></i> 55 7155 1495
      </div>
      <div class="social-links">
  
        <a onclick="window.open('https://www.facebook.com/PicoDiRoma/')" class="facebook" style="font-size: 25px;"><i class="icofont-facebook"></i></a>
        <a onclick="window.open('https://www.instagram.com/galeria_pico_di_roma/')" class="instagram" style="font-size: 25px;"><i class="icofont-instagram"></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header"style="height: 7rem;">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light" ><a href="index" ><img src="assets\img\portfolio\pico.logo.png" ></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block mt-3" >
        <ul>
         
          <li><a href="index#portfolio"style="font-size: 20px;">Cuadros</a></li>
          <li><a href="#contact"style="font-size: 20px;">Contacto</a></li>
         <?php if(empty($_SESSION['user'])) {
        
         
         ?>
          <li class="drop-down" ><a style="font-size: 20px;">Inicio de sesion<i class="fab fa-500px"></i></a>
            <ul>
              <li><a href="login" style="font-size: 20px;">Ingresar</a></li>
             
              <li><a href="register" style="font-size: 20px;">Registrar</a></li>
              
            </ul>
          </li>
          <?php } else {

            ?>
            <li class="drop-down" style="font-size: 20px;"><a  style="font-size: 20px;"><?php echo $_SESSION['user']['usuario'] ?></a>
            <ul>
              <li><a href="informacion" style="font-size: 20px;">Perfil</a></li>
             
              <li><a href="carrilleno"  style="font-size: 20px;">Carrito</a></li>
              <li><a href="salir.php" style="font-size: 20px;">Cerrar sesion</a></li>
            </ul>
          </li>
          <?php } ?>
<li><a href="carrilleno" style="font-size: 20px;">Carrito de compra</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

</body>
 <main id="main">
<div class="container">
  <div class="site-wrap">


    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12">
            <div class="border p-4 rounded" role="alert">
    
            <?php if( empty($_SESSION['user'])) 
    { 
      ?>
  Ya tienes cuenta? <a href="login.php">Click aqui</a> para ingresar
            </div>
          </div>
        </div>
 <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
            <h2 class="h3 mb-3 text-black">Informacion de Contacto</h2>
            <div class="p-3 p-lg-5 border">
              <div class="form-group row">
                <label for="c_country" class="text-black">Correo Electronico</label>
                <input type="text" class="form-control" id="c_companyname" name="c_companyname">
                        
                
              </div>
              <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_fname" class="text-black">Primer Nombre <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_fname" name="c_fname">
                </div>
                <div class="col-md-6">
                  <label for="c_lname" class="text-black">Segundo Nombre <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_lname" name="c_lname">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_companyname" class="text-black">Apellidos </label>
                  <input type="text" class="form-control" id="c_companyname" name="c_companyname">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_address" class="text-black">Direccion <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_address" name="c_address" placeholder="Calle">
                </div>
              </div>
                <div class="form-group row">
               <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Colonia">
              </div>
            </div>
                <div class="col-md-6">
                  <div class="form-group">
                   <input type="text" class="form-control" placeholder="Numero int y num ext">
                </div>
</div>
</div>

              <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_state_country" class="text-black">Estado<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_state_country" name="c_state_country">
                </div>
                <div class="col-md-6">
                  <label for="c_postal_zip" class="text-black">Codigo Postal <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_postal_zip" name="c_postal_zip">
                </div>
              </div>

              <div class="form-group row mb-5">
                <div class="col-md-6">
                  <label for="c_email_address" class="text-black">Delegacion o municipio <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_email_address" name="c_email_address">
                </div>
                <div class="col-md-6">
                  <label for="c_phone" class="text-black">Telefono <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_phone" name="c_phone" placeholder="Phone Number">
                </div>
              </div>



  <?php
  } else {
  
 $query = " 
        SELECT nombre,
               apellidos,
               telefono,
         (SELECT calle FROM direccion where id_direccion = (SELECT id_direccion FROM usuario WHERE id_direccion= US.id_direccion  )) AS calle,
         (SELECT colonia FROM direccion where id_direccion = (SELECT id_direccion FROM usuario WHERE id_direccion= US.id_direccion  )) AS colonia,
         (SELECT num_int FROM direccion where id_direccion = (SELECT id_direccion FROM usuario WHERE id_direccion= US.id_direccion  )) AS num_int,
         (SELECT ext FROM direccion where id_direccion = (SELECT id_direccion FROM usuario WHERE id_direccion= US.id_direccion  )) AS ext,
         (SELECT estado FROM direccion where id_direccion = (SELECT id_direccion FROM usuario WHERE id_direccion= US.id_direccion  )) AS estado,
        (SELECT id_cp FROM direccion where id_direccion = (SELECT id_direccion FROM usuario WHERE id_direccion= US.id_direccion  )) AS cod,
         (SELECT delegacion FROM direccion where id_direccion = (SELECT id_direccion FROM usuario WHERE id_direccion= US.id_direccion  ))
          AS delegacion,
         (SELECT email FROM cuenta where id_cuenta = (SELECT id_cuenta FROM usuario WHERE id_cuenta= US.id_cuenta  ))AS correo
             FROM USUARIO US 
             WHERE 
             US.id_usuario = ".$_SESSION['user']['id_Cuenta']."
             
             "; 
        try 
        { 
            // Execute the query against the database 
            //genera un dato en lenguaje sql
            $stmt = $db->prepare($query);
            //ejecutar la consulta y devuelve unavariable 
            $stmt->execute(); 
        } 
        //error almomento de ejecutar el query
        catch(PDOException $ex) 
        { 
          
           die("Failed to run query: " . $ex->getMessage()); 
        } 

  $rows=$stmt->fetchAll();

foreach ($rows as $row ): ?>

  


        <div class="row">
          <div class="col-md-5 mb-5 mb-md-0">
            <h2 class="h3 mb-3 text-black">Informacion de Contacto</h2>
            <div class="p-3 p-lg-5 bordercolor-black">
              <div class="form-group row">
                <label for="c_country" class="text-black">Correo Electronico</label>
               <input style="background-color: #f0ebe4;" disabled="true" type="text" class="form-control" name="c_lname" value=<?php echo $row['correo']?>>
                        
                
              </div>
              <div class="form-group row">
                <div class="-md">
                  <label for="c_nombre" class="text-black"> Nombre </label>
                   <input style="background-color: #f0ebe4;" disabled="true" type="text" class="form-control" name="c_lname" value=<?php echo $row['nombre']?>>
                </div>
               
             

              <div class="form-group row">
                <div class="col-md">
                  <label for="c_nombre" class="text-black"> Apellidos</label>
                   <input style="background-color: #f0ebe4;" disabled="true" type="text" class="form-control" name="c_lname" value=<?php echo $row['apellidos']?>>
                </div>
              </div>
             </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_address" class="text-black">Direccion <span class="text-danger">*</span></label>
                   <input style="background-color: #f0ebe4;" disabled="true" type="text" class="form-control" id="c_lname" name="c_lname" value='<?php echo $row['calle']?>'>
                </div>
              </div>
                <div class="form-group row">
               <div class="col-md-6">
              <div class="form-group">
                <input style="background-color: #f0ebe4;" disabled="true" class="form-control" value='<?php echo $row['colonia']?>'>
              </div>
            </div>
                <div class="col-md-6">
                  <div class="form-group">
                  <input style="background-color: #f0ebe4;" disabled="true" class="form-control" value='<?php echo 'int: '.$row['num_int'].'ext: '.$row['ext']?>'>
                </div>
                </div>
                </div>


              <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_state_country" class="text-black">Estado</label>
                  <input style="background-color: #f0ebe4;" disabled="true" class="form-control" value='<?php echo $row['estado']?>'>
                </div>
                <div class="col-md-6">
                  <label for="c_postal_zip" class="text-black">Codigo Postal </label>
                     <input style="background-color: #f0ebe4;" disabled="true" class="form-control" value='<?php echo $row['cod']?>'>
                </div>
              </div>

              <div class="form-group row mb-5">
                <div class="col-md-6">
                  <label for="c_email_address" class="text-black">Delegacion o municipio  <input style="background-color: #f0ebe4;" disabled="true" class="form-control" value='<?php echo $row['delegacion']?>'>
                </div>
                <div class="col-md-6">
                  <label for="c_phone" class="text-black">Telefono<br>  <br><input style="background-color: #f0ebe4;" disabled="true" class="form-control" value='<?php echo $row['telefono']?>'>
                </div>
              </div>

         <?php endforeach; }?>


              <div class="form-group">
                <label for="c_ship_different_address" class="text-black" data-toggle="collapse" href="#ship_different_address" role="button" aria-expanded="false" aria-controls="ship_different_address"><input type="checkbox" value="1" id="c_ship_different_address"> Entregar en otra direccion?</label>
                <div class="collapse" id="ship_different_address">
                  <div class="py-2">
                 <label for="c_country" class="text-black">Correo Electronico</label>
                <input type="text" class="form-control" id="c_companyname" name="c_companyname">

                    <div class="form-group row">
                      <div class="col-md-6">
                        <label for="c_diff_fname" class="text-black">Primer Nombre<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="c_diff_fname" name="c_diff_fname">
                      </div>
                      <div class="col-md-6">
                        <label for="c_diff_lname" class="text-black">Segundo Nombre <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="c_diff_lname" name="c_diff_lname">
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-md-12">
                        <label for="c_diff_companyname" class="text-black">Apellidos </label>
                        <input type="text" class="form-control" id="c_diff_companyname" name="c_diff_companyname">
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-md-12">
                        <label for="c_diff_address" class="text-black">direccion </label>
                        <input type="text" class="form-control" id="c_diff_address" name="c_diff_address" placeholder="Calle">
                      </div>
                    </div>

                      <div class="form-group row">
               <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Colonia">
              </div>
            </div>
                <div class="col-md-6">
                  <div class="form-group">
                   <input type="text" class="form-control" placeholder="Numero int y num ext">
                </div>
</div>
</div>

                   
                        <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_state_country" class="text-black">Estado<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_state_country" name="c_state_country">
                </div>
                <div class="col-md-6">
                  <label for="c_postal_zip" class="text-black">Codigo Postal <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_postal_zip" name="c_postal_zip">
                </div>
              </div>

              <div class="form-group row mb-5">
                <div class="col-md-6">
                  <label for="c_email_address" class="text-black">Delegacion o municipio <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_email_address" name="c_email_address">
                </div>
                <div class="col-md-6">
                  <label for="c_phone" class="text-black">Telefono <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_phone" name="c_phone" placeholder="Phone Number">
                </div>
              </div>

                  </div>

                </div>
              </div>

              <div class="form-group">
                <label for="c_order_notes" class="text-black">Nota</label>
                <textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5" class="form-control" placeholder="Instrucciones para la entrega "></textarea>
              </div>

            </div>
          </div>
          <div class="col-md-6">

            <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Tu cuenta</h2>
                <div class="p-3">
                  
                 <?php    //$_SESSION['carrito'] = array(); 
          
if(!empty($_GET['id'] )){
  if(!empty($_SESSION['carrito'])){
    array_push($_SESSION['carrito'], $_GET['id'] );
     /*     $tam = count($_SESSION['carrito'], COUNT_RECURSIVE);
      $i=0;

      for($i; $i< $tam ; $i++){
        print_r($_SESSION['carrito'][$i].', ');
      }*/
  }
  else{
    $_SESSION['carrito'] = array();
    array_push($_SESSION['carrito'], $_GET['id'] );
    /*$tam = count($_SESSION['carrito'], COUNT_RECURSIVE);
      $i=0;

      for($i; $i< $tam ; $i++){
        print_r($_SESSION['carrito'][$i].', ');
      }*/
  }
  }  $tam = count($_SESSION['carrito'], COUNT_RECURSIVE);

      //print_r($_SESSION['carrito']);        
   ?>

           <form class="row md-12">
            <div class="site-blocks-table ">
               <table class="table  text-center" >
                <thead>
               
                    <th class="product-thumbnail col-1">Imagen</th>
                     <th class="product-quantity col-1">Nombre</th>
                    <th class="product-name col-1">Cuadro numero</th>
                    <th class="product-price col-1">Precio</th>
                
                  
            
                  </tr>
               
           <?php     


  for($i=0; $i<$tam;$i++ ){
    $query = " 
        SELECT 
         (SELECT nombre FROM cuadro where id_cuadro = (SELECT id_cuadro FROM producto WHERE id_cuadro= US.id_cuadro  )) AS nombre,
         (SELECT descripcion FROM cuadro where id_cuadro = (SELECT id_cuadro FROM producto WHERE id_cuadro= US.id_cuadro  )) AS descripcion,
         (SELECT imagen FROM cuadro where id_cuadro = (SELECT id_cuadro FROM producto WHERE id_cuadro= US.id_cuadro  )) AS imagen,

      
         (SELECT id_producto FROM precio where id_precio = (SELECT id_precio FROM producto WHERE id_precio= US.id_precio  )) AS producto,

         (SELECT precio FROM precio where id_precio = (SELECT id_precio FROM producto WHERE id_precio= US.id_precio  )) AS precio


              FROM producto US where id_producto = ".$_SESSION['carrito'][$i] ." ; 
                         "; 
        try 
        { 
            // Execute the query against the database 
            //genera un dato en lenguaje sql
            $stmt = $db->prepare($query);
            //ejecutar la consulta y devuelve unavariable 
            $stmt->execute(); 
        } 
        //error almomento de ejecutar el query
        catch(PDOException $ex) 
        { 
          
           die("Failed to run query: " . $ex->getMessage()); 
        } 

  $rows=$stmt->fetch();
     






?>
  
  

                      <tr>

                     <td class="product-thumbnail  ">
                      <img style="width: 100px;height: 150px;" src=<?php echo $rows['imagen']; ?> >
                    </td>

                    <td class="product-name ">
                      <h2 class="h5 text-black  ml-2 mt-5"><?php echo $rows['nombre']; ?></h2>
                    </td>

                    <td><h2 class="h5 text-black  ml-2 mt-5"><?php echo $rows['producto']; ?> </h2>
                    </td>

                    <td><h2 class="h5 text-black  ml-2 mt-5">$ <?php echo $rows['precio']; ?></h2></td>
                  

                   
                  </tr>
           
                
                
         

  

<?php
  }    
  ?>
</table></div></form>


 </div>



            
            <div class="row">
              <div class="col-12">

                <h2 class="h3 mb-2 text-black-center">Tu orden</h2>
                <div class="p-4 p-lg-6 border" style="align-items: center;">
                     
                  <table class="table site-block-order-table mb-5">
                    <thead>
                    </thead>
                    <tbody>
                    
                      <tr>
                        <td class="text-black font-weight-bold"><strong>Sub Total</strong></td>
                        <td class="text-black">$ <?php echo $_GET['id_precio'];  ?></td>
                      </tr>
                      <tr>
                        <td class="text-black font-weight-bold"><strong>Total</strong></td>
                        <td class="text-black font-weight-bold"><strong>$ <?php echo $_GET['id_precio'];  ?></strong></td>
                      </tr>
                    </tbody>
                  </table>

                  <center>
                  <div class="border p-3 mb-3">
                      <div class="col-4"></div>
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
  
  
       <form action="/procesar-pago" method="POST">
  <script
   src="https://www.mercadopago.com.mx/integrations/v1/web-payment-checkout.js"
   data-preference-id="<?php echo $preference->id;?>">
  </script>
</form>
               <br>

                 <div class="col-4"></div>


                <div id="paypal-button-container"></div>
<script src="https://www.paypal.com/sdk/js?client-id=Ab-Pq1fwmAW3PaAKhD1G9yAKmQhfplshLOdWYDmvrk3IXA1NHB_Gq8b7HOGqioLljTuVzQmUwmAEtXe6&currency=MXN" data-sdk-integration-source="button-factory"></script>
<script>


  // Point your server to the PayPal API
    var PAYPAL_ORDER_API = 'https://api.paypal.com/v2/checkout/orders/';
  paypal.Buttons({
      style: {
          shape: 'rect',
          color: 'gold',
          layout: 'horizontal',
          label: 'paypal',
          
      },
      createOrder: function(data, actions) {
        
          return actions.order.create({
              purchase_units: [{
                  amount: {
                      value: <?php echo $_GET['id_precio'];  ?>
                  }
              }]
          });
      },
      onApprove: function(data, actions) {
          return actions.order.capture().then(function(details) {
              alert('Compra exitosa ' + details.payer.name.given_name + '!');
          });
      }
  }).render('#paypal-button-container');
</script>
                



              </div>
              <center>
            </div>

          </div>
        </div>
        <!-- </form> -->
      </div>
    </div>

  
  </div>
</div></main></body>

<?php require('./static/footer.php'); ?>

  <a href="#" class="back-to-top"><i class="bx bxs-up-arrow-alt"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


</html> 
</html>