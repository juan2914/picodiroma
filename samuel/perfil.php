<?php 

    // First we execute our common code to connection to the database and start the session 
    require("common.php"); 
     
    // At the top of the page we check to see whether the user is logged in or not 
    if(empty($_SESSION['user'])) 
    { 
        // If they are not, we redirect them to the login page. 
        header("Location: index.php"); 
         
        // Remember that this die statement is absolutely critical.  Without it, 
        // people can view your members-only content without logging in. 
        die("Redirecting to index.php"); 
    } 
?>

<!DOCTYPE html>
<html>
<?php
  require("static/header.php"); 
?>
<br><br>
    <body>
      <div class="wrapper">
    	<div class="col-md-5 mt-5">
            <!-- Material form login -->
            <div class="card cambiocard">

              <h5 class="card-header text-left py-4 avacolor">
                <strong>Hola <?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?></strong>
              </h5>

              <!--Card content-->
              <div class="card-body px-lg-5 pt-0">

                <!-- Form -->
                <form class="text-left" style="color: #757575;" action="edit_account.php" method="post">

                  <!-- User -->
                  <div class="md-form mt-3">
				    <input type="text" name="email" value="<?php echo htmlentities($_SESSION['user']['email'], ENT_QUOTES, 'UTF-8'); ?>" hidden=true/> 
                  </div>

                  <!-- Password -->
                  <div class="md-form">
                    <input type="password"  id="materialLoginFormPassword" class="form-control" required="true" name="password" value="">
                    <label for="materialLoginFormPassword">Nueva Contraseña</label>
                  </div>
                  <!-- Sign in button -->
                  <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" name ="btnChange" type="submit">
                      Cambiar Contraseña</button>
                </form>
                <a href="principal.php"><button class="btn btn-outline-danger btn-rounded btn-block my-4 waves-effect z-depth-0" name ="btnChange">
                      Cancelar</button></a>
                <!-- Form -->   

              </div>

            </div>
            <!-- Material form login -->
        </div>
      </div>
<?php
  require("static/footer.php"); 
?>
    </body>
    
   <!-- Footer -->

</html>
