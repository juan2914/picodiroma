<!DOCTYPE html>
<html lang="en">
   <?php
require("./static/cabecera.php");
?>


    <body id="page-top">
      
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">             
                <!-- titulo bajo el banner-->
                <h1 class="masthead-heading mb-0">Galeria
                 <!-- Lineas divisoras-->
              <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Division-->
               
                    
                 
            </div>
   

        <section class="page-section portfolio" id="portfolio">
            <div class="container">
               
               
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Imagenes de la galeria-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal0">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                  <!-- Imagenes -->
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div><img class="img-fluid" src="style/img/picopico.png" alt="Log Cabin"/>
                        </div>
                    </div>
                   
                    
                
        </section>
             </header>

        <!-- seccion de la venta-->
        <div class="portfolio-modal modal fade" id="portfolioModal0" tabindex="-1" role="dialog" aria-labelledby="#portfolioModal0Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">

                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary mb-0">Titulo de la mercancia</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image--><img class="img-fluid rounded mb-5" src="style/img/picopico.png" alt="Log Cabin"/>
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" href="#" data-dismiss="modal"><i class="fas fa-times fa-fw"></i>Close Window</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
        
        
        
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
               



     
        
        </section>

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