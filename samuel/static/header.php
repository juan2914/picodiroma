    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="Css/style.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <title>AvaPartner</title>
    </head>
    
<!--Navbar -->
        <nav class="mb-1 navbar navbar-expand-lg navbar-dark avacolor fixed-top" >
          <a class="navbar-brand" href="./index.php">AvaPartner</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
            aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="./index.php">Inicio
                </a>
              </li> 
              <?php 
              require("common.php"); 
                  if(empty($_SESSION['user'])) 
                  { 
                      ?>
                      <li class="nav-item active">
                        <a class="nav-link" href="./inicio.php">Login
                        </a>
                      </li> 
                      <?php
                  }
                  else{?>
                    <li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle' id='navbarDropdownMenuLink-333' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                          <i class='fas fa-user'><?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?></i>
                        </a>
                        <div class='dropdown-menu dropdown-menu-right dropdown-default' aria-labelledby='navbarDropdownMenuLink-333'>
                          <a class='dropdown-item' href='./perfil.php'>Perfil</a>
                          <a class='dropdown-item' href='./principal.php'>Registro</a>
                          <a class='dropdown-item' href='./logout.php'>Cerrar Sesión</a>
                        </div>
                    </li>
                    
                    <?php
                  }
              ?>
              
            </ul>
            
          </div>
        </nav>
        
        <!--/.Navbar

         -->