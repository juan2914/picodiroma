  

<!DOCTYPE html>
<html>
<?php
	require("static/header.php"); 
?>
    <body>
      
        <div class="fondo">
          <div class="wrapper">
        <br><br>
		<div class="container col-md-5 mt-5">
            <!-- Material form login -->
            <div class="card cardbox">

              <h5 class="card-header text-center py-4 avacolor">
                <strong>Iniciar Sesión</strong>
              </h5>

              <!--Card content-->
              <div class="card-body px-lg-5 pt-0">

                <!-- Form -->
                <form class="text-center" style="color: #757575;" action="login.php" method="POST">

                  <!-- User -->
                  <div class="md-form mt-3">
                    <input type="text" id="user" name="username" class="form-control" required="true">
                    <label for="materialLoginFormEmail">User</label>
                  </div>

                  <!-- Password -->
                  <div class="md-form">
                    <input type="password"  id="materialLoginFormPassword" class="form-control" required="true" name="password" value="">
                    <label for="materialLoginFormPassword">Password</label>
                  </div>

                  <div class="d-flex justify-content-around">
                    <div>
                      <!-- Forgot password 
                      <a href="">Olvidaste tu contraseña</a>-->
                    </div>
                  </div>

                  <!-- Sign in button -->
                  <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" name ="btnLogin" type="submit">
                      Iniciar Sesión</button>
                 
                  <!-- Social login 
                  <p>o inicia con:</p>
                  <a type="button" class="btn-floating btn-fb btn-sm">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                  <a type="button" class="btn-floating btn-tw btn-sm">
                    <i class="fab fa-twitter"></i>
                  </a>
                  <a type="button" class="btn-floating btn-li btn-sm">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                  <a type="button" class="btn-floating btn-git btn-sm">
                    <i class="fab fa-github"></i>
                  </a>-->

                </form>
                <!-- Form -->   

              </div>

            </div>
            <!-- Material form login -->
        </div>
</div>
</div>

    <?php
  require("static/footer.php"); 
?>
    </body>

</html>

