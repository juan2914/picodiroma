<!DOCTYPE html>
<html lang="en">

<?php 
require("conexion.php");
if(!empty($_SESSION['user'])) 
    { 
      header("Location: ./index.php");
      die("Redirect to: ./index.php");
    }



?>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link rel="shortcut icon" href="assets\img\portfolio\pico.logo.png" />
  <title>Pico Di Roma</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
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
            <li class="drop-down" style="font-size: 20px;"><a><?php echo $_SESSION['user']['usuario'] ?></a>
            <ul>
              <li><a href="informacion" style="font-size: 20px;">Perfil</a></li>
             
              <li><a>Carrito</a></li>
              <li><a href="salir.php" style="font-size: 20px;">Cerrar sesion</a></li>
            </ul>
          </li>
          <?php } ?>
<li><a href="carrilleno" style="font-size: 20px;">Carrito de compra</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
<body>

 <div class="container ">

  <hr>
  <br>
<center>
  <h2>Iniciar Sesión</h2>
  <br>
  <form action="bienvenida.php " method="post">
        
                <div class="col-md-6 form-group">
                   <input type="usuario" name="usuario" class="form-control" id="usuario" placeholder="Ingresa tu usuario o Email" style="height:  60px">
                  <div class="validate"></div>
                </div>
            
              
           
              
                 <div class="col-md-6 form-group">
                <input type="password" name="pass" id="pass" class="form-control"placeholder="ingresa tu contraseña" style="height: 60px">
                <div class="validate"></div>
              </div>
           
              

 




             <button id="boton_personalizado" type="submit">ingresar</button>
            </form></center>
          
          </div>

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