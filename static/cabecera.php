
 <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Pico di Roma</title>
        <!-- Font Awesome icons (free version)-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="style/css/styles.css" rel="stylesheet">

        <!-- Fonts CSS-->
        <link rel="stylesheet" href="css/heading.css">
        <link rel="stylesheet" href="css/body.css">
    </head>



 <nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
            <div class="container"><a class="navbar-brand js-scroll-trigger" href="index.php">Pico di Roma</a>
                <button class="navbar-toggler navbar-toggler-right font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a href="quienessomos.php">Quienes Somos</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1"><a  href="carrito.php">Galeria</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1"><a  href="#direccion">Contacto</a>
                        </li>
                          <li class="nav-item mx-0 mx-lg-1"><a href="venta.php"><i class="fab fa-opencart"></i></a>
                        </li>

                        <li class="nav-item mx-0 mx-lg-1">
                            <div class="box">
                                <div class="container-1">
                                <span class="icon"><i class="fa fa-search"></i></span>
                                <input type="search" style="width: 160px;" id="search" placeholder="Busqueda..." />
                                </div>
                            </div>  
                             </ul>
                        <ul class="navbar-nav">
                        </li>
                        <?php 
                        if(empty($_SESSION['user'])) { 
                       ?>
                        <li class="nav-item mx-0 mx-lg-1"><a href="iniciosesion.php"><i class="fas fa-user-circle"></i></a>
                        </li>
                        <?php
                        }
                        else {
                        ?>
                        <li class="nav-item mx-0 mx-lg-1 dropdown">
                        <a class="nav-link drop down-toggle" data-toggle="dropdown" aria-hasup="true" aria-expande="false" > <?php
                        echo ($_SESSION['user']['usuario']);  ?></a>  
                        <div class="dropdown-menu dropdown-menu-right dropdown-default bg-secondary "style="color:#6c757d; " >
                        <a class="dropdown-item "  href="">Mi perfil
                        </a>    
                        <a class="dropdown-item nav-item mx-0 mx-lg-1" href="">Mi Cuenta
                        </a> 
                        <a class="dropdown-item" href="../picodiroma/logout.php">Cerrar Sesion
                        </a> 
                         <?php
                        }
                        ?>                 
                    
                       
                         </div></li></ul>

            </div>
        </div>
    </nav>
                       