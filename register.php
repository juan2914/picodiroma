<!DOCTYPE html>
<html lang="en">
<?php 
require("./conexion.php");   

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

<br>
 <div class="container text-center  ">

  <form action="insert.php " method="post">
  
    <h3 class="text-left" style="color: #aca18c;">Datos personales</h3>
    <hr>
              <div class="form-row">
                
                <div class="col-md-4 form-group">
                   <input type="text" name="nombre" id="nombre" value="" placeholder="nombre"  data-msg="Please enter at least 4 chars" class="col-md-12" required="true" />
                  <div class="validate"></div>
                </div>

                <div class="col-md-4 form-group">
                   <input type="text" name="apellidos" id="apellidos" value="" placeholder="apellido"   class="col-md-12" required="true"/>
                  <div class="validate"></div>
                </div>
              
                <div class="col-md-4 form-group">
                   
                 <input type="tel" name="telefono" id="telefono" value="" placeholder="telefono"  class="col-md-12" required="true"/>
                  <div class="validate"></div>
                </div>

              </div>

              <div class="form-row">

                <div class="col-md-4 form-group">
                   <input type="email" name="email" id="email" value="" placeholder="email"  class="col-md-12"required="true" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                   <input type="user" name="user" id="user" value="" placeholder="usuari@"  class="col-md-12"required="true" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-4 form-group">
                   <input type="password" name="pass" id="pass" value="" placeholder="contraseña"  class="col-md-12"required="true" />
                  <div class="validate"></div>
                </div>

              </div>

<h3 class="text-left" style="color: #aca18c;">Direccion</h3>
<hr>

              <div class="form-row">

                <div class="col-md-6 form-group">
                   <input  type="text" name="calle" id="calle" value="" placeholder="calle"   class="col-md-12" required="true"/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                   <input type="text" name="colonia" id="colonia" value="" placeholder="colonia"   class="col-md-12"required="true"/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-3 form-group">
                   <input type="text" name="num_int" id="int" value="" placeholder="numero interior"   class="col-md-12"/>
                  <div class="validate"></div>
                </div>
            

           
              <div class="col-md-3 form-group">
                <input  type="text" name="ext" id="ext" value="" placeholder="numero exterior" class="col-md-12">
                <div class="validate"></div>
              </div>
              <div class="col-md-6 form-group">
                   <input type="text" name="cp" id="c_p" value="" placeholder="codigo postal" class="col-md-12" required="true"/>
                  <div class="validate"></div>
                </div>
          
              <div class="col-md-6 form-group">
                   <input type="text" name="estado" id="estado" value="" placeholder="estado"  class="col-md-12"required="true"/>
                  <div class="validate"></div>
                </div>
         
              <div class="col-md-6 form-group">
                   <input type="text" name="delegacion" id="delegacion" value="" placeholder="delegacion o municipio" class="col-md-12" required="true"/>
                  <div class="validate"></div>
                </div>

    </div>



              <div class="form-row">
              <div class="col-md-6 form-group">
              <div><button  id="boton_personalizado" type="submit">Registrar</button></div>
              </div>
             
    </form>
     <div class="col-md-6">  
              <div><button  id="boton_personalizado" onclick="window.location='index'" >Salir</button></div>
              </div>
              </div> 
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