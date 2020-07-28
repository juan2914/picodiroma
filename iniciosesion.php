<!DOCTYPE html>
<html lang="en">
    <?php
require("./static/cabecera.php");
?>
  


    <body id="page-top">
      
        <header class="masthead bg-primary text-white text-center">
        
      <div class="overlay">
<!-- LOGN IN FORM by Omar Dsoky -->
<form>
   <!--   con = Container  for items in the form-->
   <div class="con">
   <!--     Start  header Content  -->
   <header class="head-form">
      <h2>Inicia sesion</h2>
      <!--     A welcome message or an explanation of the login form -->
      <p>inicie sesión aquí con su nombre de usuario y contraseña</p>
   </header>
   <!--     End  header Content  -->
   <br>
   <div class="field-set">
     
      <!--   user name -->
    
        <i class="fa fa-user-circle"></i>
        
        <!--   user name Input-->
         <input class="form-input" id="user" type="text" placeholder="@UserName" required>
     
      <br>
     
           <!--   Password -->
     
        <i class="fa fa-key"></i>
     
      <!--   Password Input-->
      <input class="form-input" type="password" placeholder="Password" id="password"  name="password" required>
     
<!--      Show/hide password  -->
     <span>
        <i style="position: absolute;" class=" mt-3 ml-1 fa fa-eye" aria-hidden="true"  type="button" id="eye"></i>
     </span>
     
     
      <br>
<!--        buttons -->
<!--      button LogIn -->
      <button class="log-in"> Entrar </button>
   </div>
  
<!--   other buttons -->
   <div class="other">
<!--      Forgot Password button-->
      <button class="btn submits frgt-pass">Olvide mi Password</button>
<!--     Sign Up button -->
      <button class="btn submits sign-up" onclick="location.href='registro.php'">Registro 
<!--         Sign Up font icon -->
      <i class="fa fa-user-plus" aria-hidden="true"></i>
      </button>
<!--      End Other the Division -->
   </div>
     
<!--   End Conrainer  -->
  </div>
  
  <!-- End Form -->
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