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

    <!-- Galeria -->
      <!-- jQuery 1.8 or later, 33 KB -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

      <!-- Fotorama from CDNJS, 19 KB -->
      <link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
  </head>

  <body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- Cabecera -->
    <?php include 'header_min.php' ?>

      <!-- Producto -->      
      <section id="Productos">
        <div class="site-section site-block-3 bg-light">
          <div class="row">
            <div class="col-12 text-center">
              <span class="sub-title">Catálogo de productos</span>
              <h2 class="font-weight-bold text-black mb-5"><?php echo $familia?></h2>
            </div>
          </div>

          <div class="container box">
            <div class="row">
              <div class="fotorama">
                <div class="col-lg-12"></div>
                <?php 
                  echo $fotos;                  
                ?>
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