<!DOCTYPE html>
<html lang="en">
<?php 
require("./conexion.php"); 

?>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

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
  ================================================= ======= -->
</head>
<main>



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
          <li><a href="index.php#portfolio"style="font-size: 20px;">Cuadros</a></li>
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
            <li class="drop-down" style="font-size: 20px;"><a style="font-size: 20px;"><?php echo $_SESSION['user']['usuario'] ?></a>
            <ul>
              <li><a href="informacion" style="font-size: 20px;">Perfil</a></li>
             
              <li><a style="font-size: 20px;">Carrito</a></li>
              <li><a href="salir.php" style="font-size: 20px;">Cerrar sesion</a></li>
            </ul>
          </li>
          <?php } ?>
<li><a href="carrilleno" style="font-size: 20px;">Carrito de compra</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->



 




  
        <?php

         $query = " 
        SELECT 
        id_producto,
         (SELECT nombre FROM cuadro where id_cuadro = (SELECT id_cuadro FROM producto WHERE id_cuadro= US.id_cuadro  )) AS nombre,
         (SELECT descripcion FROM cuadro where id_cuadro = (SELECT id_cuadro FROM producto WHERE id_cuadro= US.id_cuadro  )) AS descripcion,
         (SELECT imagen FROM cuadro where id_cuadro = (SELECT id_cuadro FROM producto WHERE id_cuadro= US.id_cuadro  )) AS imagen,

      

         (SELECT precio FROM precio where id_precio = (SELECT id_precio FROM producto WHERE id_precio= US.id_precio  )) AS precio


              FROM producto US where id_producto = ".$_GET['var'] ."; 
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


            
  


       
       




<section id="portfolio-details" class="portfolio-details">
  <div class="container">
    <div class="form-row">
         <div class="col-md-6">
         <div class="portfolio-details-container">
             
                 <div class="owl-carousel portfolio-details-carousel">
                 <img class="img-fluid" alt="" src=<?php echo $rows['imagen'];?> >
                 <img src="assets/img/portfolio-details-2.jpg" class="img-fluid" alt="">
                 </div>    
             
          </div>
          </div>

          <div class="col-md-6 ">
          <div class="">
              <br><br>  
              <h1><?php echo $rows['nombre'];?></h1>
           <hr>
             
              <p>   <?php echo $rows['descripcion'];?>  </p>          
            
            
            <div class="btn-group" role="group disable" aria-label="Third group" >
            <button type="button" class="btn btn-secondary" disabled="true" style="background-color: #ccb598;border-color: #ccb598;" >1 /   10 </button>
            </div>
           
            <div class="btn-group" role="group" aria-label="Third group">
            <button type="button" class="btn btn-secondary"  onclick="carritolleno(<?php echo $rows['id_producto']; ?>)" style="background-color: #ccb598;border-color: #ccb598;" > 2 / 10 </button>
            </div>
          
            <div class="btn-group" role="group" aria-label="Third group">
            <button type="button" class="btn btn-secondary" onclick="carritolleno(<?php echo $rows['id_producto']; ?>)" style="background-color: #ccb598;border-color: #ccb598;"> 3 / 10 </button>
            </div>
              <div class="btn-group" role="group" aria-label="Third group">
            <button type="button" class="btn btn-secondary" onclick="carritolleno(<?php echo $rows['id_producto']; ?>)" style="background-color: #ccb598;border-color: #ccb598;"> 4 / 10 </button>
            </div>
             <div class="btn-group" role="group" aria-label="Third group">
            <button type="button" class="btn btn-secondary" onclick="carritolleno(<?php echo $rows['id_producto']; ?>)" style="background-color: #ccb598;border-color: #ccb598;"> 5 / 10 </button>
            </div>
              </div>
              <br>
              
             
            <div class="btn-group" role="group" aria-label="Third group">
            <button type="button" class="btn btn-secondary" onclick="carritolleno(<?php echo $rows['id_producto']; ?>)" style="background-color: #ccb598;border-color: #ccb598;"> 6 / 10 </button>
            </div>
               <div class="btn-group" role="group" aria-label="Third group">
            <button type="button" class="btn btn-secondary" onclick="carritolleno(<?php echo $rows['id_producto']; ?>)" style="background-color: #ccb598;border-color: #ccb598;"> 7 / 10 </button>
            </div>
               <div class="btn-group" role="group" aria-label="Third group">
            <button type="button" class="btn btn-secondary" onclick="carritolleno(<?php echo $rows['id_producto']; ?>)" style="background-color: #ccb598;border-color: #ccb598;"> 8 / 10 </button>
            </div>
               <div class="btn-group" role="group" aria-label="Third group">
            <button type="button" class="btn btn-secondary" onclick="carritolleno(<?php echo $rows['id_producto']; ?>)" style="background-color: #ccb598;border-color: #ccb598;"> 9 / 10 </button>
            </div>
               <div class="btn-group" role="group" aria-label="Third group">
            <button type="button" class="btn btn-secondary" onclick="carritolleno(<?php echo $rows['id_producto']; ?>)" style="background-color: #ccb598;border-color: #ccb598;"> 10 / 10 </button>
            </div>
           

            </div>
          </div>
          </div>
    </div>
  </div>

    </section>

    <!-- ======= Portfolio Details Section ======= -->

 
  </main><!-- End #main -->

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