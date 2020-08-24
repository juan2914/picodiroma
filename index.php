
  <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
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
  <!-- =======================================================
  * Template Name: Remember - v2.1.0
  * Template URL: https://bootstrapmade.com/remember-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
<body>
<?php 
require("./conexion.php");   

?>


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

<?php  

if (empty($_GET['pagina'])){
  header('location: index?pagina=1'); 
}


?>


  
   <section class="testimonials ">
      <div class="container">

        <div class="owl-carousel testimonials-carousel" data-aos="zoom-in">

          <div class="testimonial-item">
            <img src="./assets/img/slide/slide1.jpg" class="testimonial-img" alt="">
          </div>

          <div class="testimonial-item">
            <img src="assets/img/slide/slide2.jpg" class="testimonial-img" alt="">
          </div>

          <div class="testimonial-item">
            <img src="assets/img/slide/slide3.jpg" class="testimonial-img" alt="">
          </div>

          <div class="testimonial-item">
            <img src="assets/img/slide/slide1.jpg" class="testimonial-img" alt="">
          </div>

          <div class="testimonial-item">
            <img src="assets/img/slide/slide2.jpg" class="testimonial-img" alt="">
          </div>

        </div>

      </div>
    </section><!-- fin del banner -->

  <main id="main">

    <!-- =======Quienessomos ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-xl-6 col-lg-6 d-flex justify-content-center align-items-stretch mt-5">
               <div class="box-heading text-justify" data-aos="fade-up">
              <h4>Nosotros</h4>
              <h3>Deja el mistero encendido en ti</h3>
              <p>Somos Pico Di Roma una empresa que estamos interesados en el
  mundo del arte antiguo, pero con un plus que nos hace diferentes a las
demás galerías de arte. Comenzamos, con muchas ganas de hacer
algo para ofrecer nuestros productos a más gente, vimos la
oportunidad de asociarnos, combinando los conocimientos de nuestro
artista y la experiencia en Web y Marketing. En ese momento
comenzó el proyecto Pico Di Roma.
La atención al cliente y la garantía de satisfacción, son pilares
fundamentales de nuestro negocio. No queremos clientes
descontentos, por ello ofrecemos respuesta rápida, damos atención
personalizada.
La confianza que tenemos en la calidad de nuestros cuadros nos
permite trabajar en esta línea.
Te invitamos a ver las novedades que ofrecemos continuamente con
las últimas tendencias en arte y decoración.
¡Esperamos contar contigo como cliente en un futuro próximo!</p>
            </div>
          </div> 

          
          <div class="col-xl-6 col-lg-6 d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
        

            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">OBJETIVO</a></h4>
              <p class="description">Nuestro objetivo es hacer el arte accesible a cualquier persona, a través de nuestra plataforma y puntos de venta y exhibición.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">MISIÓN</a></h4>
              <p class="description">
Pico Di Roma es una galería de arte donde su prioridad es rescatar y
conservar lo antiguo donde el artista le dará un toque moderno, pero
de una manera misteriosa, lujosa y excéntrica.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">VISIÓN</a></h4>
              <p class="description">
Pico Di Roma pretende obtener un resultado de exclusividad donde el
crecimiento sea continuo, dando a conocer nuestros productos a los
diferentes sectores del mercado.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">VALORES</a></h4>
              <p class="description">
Los valores de nuestra empresa son:<ul>
  <li> Interés por las personas - Generosidad.</li>
 <li> Trabajo en equipo.</li>
 <li> Respeto a los demás.</li>
 <li> Desarrollo de la Creatividad.</li>
 <li> Confianza.</li>
 <li> Pertenencia.</li>
</ul></p>
            </div>

         </div> 



      </div>
    </section>

<section id="cuadros">
  

   
<section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="zoom-in">
          <h2>Cuadros</h2>
        </div>

       <!-- <div class="row">
          <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active"><h4>All</h4></li>
              <li data-filter=".filter-app"><h4>App</h4></li>
              <li data-filter=".filter-card"><h4>Card</h4></li>
              <li data-filter=".filter-web"><h4>Web</h4></li>
            </ul>
          </div>
        </div>fin del quienes somos -->

        <?php
           $articulo_x_pagina=9;
  $iniciar=( $_GET['pagina']-1)*$articulo_x_pagina;

         $query = " 
        SELECT (SELECT count(*) from producto) as cuenta,
        id_producto, 
         (SELECT nombre FROM cuadro where id_cuadro = (SELECT id_cuadro FROM producto WHERE id_cuadro= US.id_cuadro  )) AS nombre,
         (SELECT descripcion FROM cuadro where id_cuadro = (SELECT id_cuadro FROM producto WHERE id_cuadro= US.id_cuadro  )) AS descripcion,
         (SELECT imagen FROM cuadro where id_cuadro = (SELECT id_cuadro FROM producto WHERE id_cuadro= US.id_cuadro  )) AS imagen,

      

         (SELECT precio FROM precio where id_precio = (SELECT id_precio FROM producto WHERE id_precio= US.id_precio  )) AS precio


             FROM producto US limit $iniciar,$articulo_x_pagina
                         "; 
        try 
        { 
            // Execute the query against the database 
            //genera un dato en lenguaje sql
            $stmt = $db->prepare($query);
            //ejecutar la consulta y devuelve unavariable 
            $stmt->bindParam('iniciar',$iniciar,
              PDO::PARAM_INT);
             $stmt->bindParam('narticulos',$articulo_x_pagina,
              PDO::PARAM_INT);
            $stmt->execute(); 
        } 
        //error almomento de ejecutar el query
        catch(PDOException $ex) 
        { 
           echo $query;
           die("Failed to run query: " . $ex->getMessage()); 
        } 

  $rows=$stmt->fetchAll();
  
  $total_articulos_bd=$stmt->rowCount(); 
  //echo $total_articulos_bd;

  $paginas=$rows[0]['cuenta']/$articulo_x_pagina; 
   
  $pagina=ceil($paginas);
  //echo $query;
 

?>
 <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

  <?php foreach ($rows as $row ):?>
        

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <a onclick="abrirCarrito(<?php echo $row['id_producto']; ?>)"><img id="imagen"  alt="Imagen" class="img-fluid" style="width: 400px;height: 300px;"      src="assets\img\portfolio\3.png" ></a>
            <div class="portfolio-info">
              <h4 style="color: white"><p><?php echo $row['nombre']?></p></h4>
              
            
             
            </div>
          </div>


          
          
         

       


     
       <?php
        endforeach;        
                ?> 
                 </div>

                 <?php 


                 ?>
  <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-end">
    
    <li class="page-item <?php echo $_GET['pagina']<=$paginas? 'disabled':''?>">
      <a class="page-link" href="index.php?pagina=<?php echo $_GET['pagina']-1;?>#cuadros">
      Anterior
    </a>
    </li>

    <?php for($i=0;$i<$pagina;$i++){ ?>
       <li class="page-item <?php echo $_GET['pagina']==$i+1? 'active': '' ?>">
         <a class="page-link" href="index.php?pagina=<?php echo $i+1;?>#cuadros"><?php echo $i+1;?></a>
       </li>
 
    <?php }?> 



    <li class="page-item 
    <?php echo $_GET['pagina']>=$paginas? 'disabled':''?>">
       <a class="page-link" href="index.php?pagina=<?php echo $_GET['pagina']+1;?>#cuadros">Siguiente</a>
    </li>
  </ul>
</nav>
          
           </div>      
    </section><!-- End Portfolio Section -->

  </section>

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

</div></section></main></body></html>

</html>