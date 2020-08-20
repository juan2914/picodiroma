
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
        <h1 class="text-light" ><a href="index.php" ><img src="assets\img\portfolio\pico.logo.png" ></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block mt-3" >
        <ul>
          <li><a href="index#about" style="font-size: 20px;">Nosotros</a></li>
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


        <?php
     
 
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

           <form class="row-md-12">
            <div class="site-blocks-table ">
               <table class="table table-bordered text-center">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Imagen</th>
                        <th class="product-quantity">Nombre</th>
                    <th class="product-name">Cuadro numero</th>
                    <th class="product-price">Precio</th>
                
                  
                    <th class="product-remove">Remover</th>
                  </tr>
                </thead>
           <?php     
$total=0;

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
     


$total=$total+$rows['precio'];



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
                  

                   <td><a type="button" class="btn btn-primary btn-sm btn-sm btnEliminar mt-5" name="limpiar a carrito" href="limpiaruno.php?id=<?php echo $i ?>">x</a></td>
                  </tr>
           
                
                
         

  

<?php
 }  

  ?>
</table></div></form>
 </div></main>





               





                     <body>
  
  <div class="site-wrap">
   

    <div class="site-section">
      <div class="container">


        <div class="row">
          <div class="col-md-6 col-left">
            <div class="border p-4 rounded">
               Seguir comprando<a href="index.php#cuadros " title=""> Click aqui</a> 
            </div>
            </div>
            <div class="col-md-6 col-right">
                <div class="border p-4 rounded">
              <a style="" href="limpiarcarrito.php" >Vaciar carrito</a>
            </div>
          </div>
          
        </div>



        <div class="row">
         
         
                  
         
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Tu Cuenta</h2>
                <div class="p-3 p-lg-5 border">
                  <table class="table site-block-order-table mb-5">
                    <thead>
                     
                    </thead>
                    <tbody>
                     
                    
                      <tr>
                        <td class="text-black font-weight-bold"><strong>Subtotal</strong></td>
                        <td class="text-black">$ <?php echo $total;  ?></td>
                      </tr>
                      <tr>
                        <td class="text-black font-weight-bold"><strong>Cuenta Total</strong></td>
                        <td class="text-black font-weight-bold"><strong>$ <?php echo $total;  ?>    </strong></td>
                      </tr>
                    </tbody>
                  </table>

                                  

                   
             

                

                  <div class="form-group">
                    <button class="btn btn-primary btn-lg py-3 btn-block" style="background-color: red;border-color: red;" onclick="window.location='checkout?id_precio=<?php echo $total ?>'" >RealizarPedido</button>
                  </div>
     </div>
              
              </div>
            </div>

        
        </div>
        <!-- </form> -->
      
    </div>

  </div>
</body>

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

</body>

</html> 