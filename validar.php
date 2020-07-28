<!DOCTYPE html>
<html lang="en">
    <?php
require("./static/cabecera.php");
?>


    <body id="page-top">
    
        <header class="masthead bg-primary text-white text-center">
      

           <div class="overlay">
<!-- LOGN IN FORM by Omar Dsoky -->
<form class="container col-md-6" action="validar.php" method="">
  <div>
     <header class="head-form">
      <h2>Registro</h2>
      <!--     A welcome message or an explanation of the login form -->
      <br>

      <p>Ingrese los datos mencionados</p>
   </header>
   
    <div class="row"> 
      <div class="col-md-5">
     <input class="formu-input" id="user" type="text" placeholder="Usuario" required="true" autofocus="true">
      </div>
     <br>
      <br>

    </div>
    <br>
    <div class="row"> 
      <div class="col-md-5">
     <input class="formu-input" id="name" type="text" placeholder="Nombre" required="true">
      </div>
      <div class="col-md-5">
      <input class="formu-input" id="lastname" type="text" placeholder="Apellidos" required="true">
     </div>
    </div>
    <br>
     <div class="row"> 
      <div class="col-md-5">
     <input class="formu-input" style="width: 410px" id="email" type="text" placeholder="Correo Electronico" required="true">
     <br>
      </div>

      
  </div>
  <button class="btn submits sign-up" type="submit">Validar</button> 

</form>
</div>
        </header>
        <?php
            require("./static/footer.php");

        ?>
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed"><a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a></div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>