<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Muebles Roci</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900"> 
    <link rel="stylesheet" href="<?php echo base_url();?>fonts/icomoon/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url();?>fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/aos.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/style.css">
  </head>

  <body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- Cabecera -->
    <?php include 'header_min.php' ?>

      <!-- Familias -->      
      <section id="Productos">
        <div class="site-section site-block-3 bg-light">
          <div class="row">
            <div class="col-12 text-center">
              <span class="sub-title">Catálogo de productos</span>
              <h2 class="font-weight-bold text-black mb-5">Productos</h2>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="img-border">
                  <img src="<?php echo base_url();?>images/cocina3.jpg" alt="Image" class="img-fluid">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="row row-items">
                  <div class="col-6">
                    <a href="<?php echo base_url();?>index.php/ProductoController/mostrarProductos/1" target="_blank" class="d-flex text-center feature active p-4 mb-4 bg-white">
                      <span class="align-self-center w-100">
                        <span class="d-block mb-3">
                          <span class="flaticon-measuring display-3"></span>
                        </span>
                        <h3>Baño</h3>
                      </span>
                    </a>
                  </div>

                  <div class="col-6">
                    <a href="<?php echo base_url();?>index.php/ProductoController/mostrarProductos/3" target="_blank" class="d-flex text-center feature active p-4 mb-4 bg-white">
                      <span class="align-self-center w-100">
                        <span class="d-block mb-3">
                          <span class="flaticon-measuring display-3"></span>
                        </span>
                        <h3>Dormitorio</h3>
                      </span>
                    </a>
                  </div>
                </div>
                <div class="row row-items last">
                  <div class="col-6">
                    <a href="<?php echo base_url();?>index.php/ProductoController/mostrarProductos/2" target="_blank" class="d-flex text-center feature active p-4 mb-4 bg-white">
                      <span class="align-self-center w-100">
                        <span class="d-block mb-3">
                          <span class="flaticon-interior-design display-3"></span>
                        </span>
                        <h3>Living y Comedor</h3>
                      </span>
                    </a>
                  </div>
                  <div class="col-6">
                    <a href="<?php echo base_url();?>index.php/ProductoController/mostrarProductos/4" target="_blank" class="d-flex text-center feature active p-4 mb-4 bg-white">
                      <span class="align-self-center w-100">
                        <span class="d-block mb-3">
                          <span class="flaticon-interior-design display-3"></span>
                        </span>
                        <h3>Cocina</h3>
                      </span>
                    </a>
                  </div>
                </div>
              </div>   
            </div>             
          </div>
        </div>
      </section>
      <!-- Fin Familias -->

    <!-- footer -->
    <?php include 'footer.php'; ?>

    <script src="<?php echo base_url();?>js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url();?>js/jquery-migrate-3.0.1.min.js"></script>
    <script src="<?php echo base_url();?>js/jquery-ui.js"></script>
    <script src="<?php echo base_url();?>js/popper.min.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url();?>js/jquery.stellar.min.js"></script>
    <script src="<?php echo base_url();?>js/jquery.countdown.min.js"></script>
    <script src="<?php echo base_url();?>js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url();?>js/bootstrap-datepicker.min.js"></script>
    <script src="<?php echo base_url();?>js/aos.js"></script>
    <script src="<?php echo base_url();?>js/main.js"></script>      
  </body>
</html>