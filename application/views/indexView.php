<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Muebles Roci</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- Cabecera -->
    <?php include 'header.php' ?>

      <!-- Trabajos realizados -->
       <section id="TrabajosRealizados"> 
        <div class="container site-section block-13 testimonial-wrap">

          <div class="row">
            <div class="col-12 text-center">
              <span class="sub-title">Trabajos Realizados</span>
              <h2 class="font-weight-bold text-black mb-5">Testimonios de clientes felices</h2>
            </div>
          </div>

          <div class="nonloop-block-13 owl-carousel">
            
            <div class="testimony">
              <img src="images/biblioteca1.jpg" alt="Image" class="img-fluid">
              <h3>Noelia Fridman</h3>
              <span class="sub-title">Biblioteca</span>
              <p>&ldquo;<em>Estoy feliz de poder organizar mis libros y adornos, a la vez decorando el living de mi casa.</em>&rdquo;</p>
            </div>
          
            <div class="testimony">
              <img src="images/cocina6.jpg" alt="Image" class="img-fluid">
              <h3>Natalia Castiglione</h3>
              <span class="sub-title">Muebles de cocina</span>
              <p>&ldquo;<em>Siento que estoy en un programa del Gourmet, amo mi cocina.</em>&rdquo;</p>
            </div>

            <div class="testimony">
              <img src="images/silla1.jpg" alt="Image" class="img-fluid">
              <h3>Pedro Alonso</h3>
              <span class="sub-title">Sillón de 3 cuerpos</span>
              <p>&ldquo;<em>No hay nada mejor que llegar del trabajo y tomar algo mientras miro la televisión en este sillón súper cómodo.</em>&rdquo;</p>
            </div>

            <div class="testimony">
              <img src="images/silla16.jpg" alt="Image" class="img-fluid">
              <h3>Estefania Raimondi</h3>
              <span class="sub-title">Juego de comedor</span>
              <p>&ldquo;<em>Las sillas son muy cómodas, la calidad de las terminaciones es excelente.</em>&rdquo;</p>
            </div>
          </div>
        </div>
      </section>
      <!-- Fin Trabajos realizados -->

      <!-- Presupuestos -->      
      <section id="Presupuestos">
        <div class="site-section site-block-3 bg-light">
          <div class="row">
            <div class="col-12 text-center">
              <span class="sub-title">Presupuestos</span>
              <h2 class="font-weight-bold text-black mb-5">Por plano o medidas</h2>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="img-border">
                  <img src="images/cocina3.jpg" alt="Image" class="img-fluid">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="row row-items">
                  <div class="col-12">
                    <a href="<?php echo base_url();?>index.php/PresupuestoController/cargarVista/medidas" target="_blank" class="d-flex text-center feature active p-4 mb-4 bg-white">
                      <span class="align-self-center w-100">
                        <span class="d-block mb-3">
                          <span class="flaticon-measuring display-3"></span>
                        </span>
                        <h3>Indicanos las medidas</h3>
                      </span>
                    </a>
                  </div>
                </div>
                <div class="row row-items last">
                  <div class="col-12">
                    <a href="<?php echo base_url();?>index.php/PresupuestoController/cargarVista/plano" target="_blank" class="d-flex text-center feature active p-4 mb-4 bg-white">
                      <span class="align-self-center w-100">
                        <span class="d-block mb-3">
                          <span class="flaticon-interior-design display-3"></span>
                        </span>
                        <h3>Subí tu plano</h3>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Fin presupuestos -->

      <!-- Herrajes -->
      <section id="Herrajes">
        <div class="site-section site-block-3">
          <div class="row">
            <div class="col-12 text-center">
              <span class="sub-title">Herrajes y productos</span>
              <h2 class="font-weight-bold text-black mb-5">Adquirí los exclusivos herrajes EuroHard o muebles prediseñados.</h2>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <div class="col-lg-6">
                <div class="row row-items">
                  <div class="col-12">
                    <a href="files/Herrajes.pdf" target="_blank" class="d-flex text-center feature active p-4 mb-4 bg-white">
                      <span class="align-self-center w-100">
                        <span class="d-block mb-3">
                          <span class="flaticon-window display-3"></span>
                        </span>
                        <h3>Catálogo de Herrajes EuroHard</h3>
                      </span>
                    </a>
                  </div>
                </div>
                <div class="row row-items last">
                  <div class="col-12">
                    <a href="<?php echo base_url();?>index.php/ProductoController/getFamilias" target="_blank" class="d-flex text-center feature active p-4 mb-4 bg-white">
                      <span class="align-self-center w-100">
                        <span class="d-block mb-3">
                          <span class="flaticon-sit-down display-3"></span>
                        </span>
                        <h3>Catálogo de Muebles</h3>
                      </span>
                    </a>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="img-border">
                  <img src="images/herrajes.jpg" alt="Image" class="img-fluid">
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </section>
      <!-- Fin Herrajes -->

      <!-- Contacto -->      
      <section id="Contacto">
        <div class="site-section site-block-3 bg-light">
          <div class="row">
            <div class="col-12 text-center">
              <span class="sub-title">Contacto</span>
              <h2 class="font-weight-bold text-black mb-5">Vía formulario, email o teléfono</h2>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <div class="col-lg-6 bg-light">
                <form action="index.php/ContactoController/contacto" method="POST">
                  <div class="form-group">
                    <label for="nombre">Nombre y apellido:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                  </div>
                  <div class="form-group">
                    <label for="telefono">Teléfono:</label>
                    <input type="text" class="form-control" id="telefono" name="telefono">
                  </div>
                  <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                  </div>
                  <div class="form-group">
                    <label for="mensaje">Mensaje:</label>
                    <textarea class="form-control" rows="5" id="mensaje" name="mensaje" required></textarea>
                  </div>
                  <button type="submit" class="btn btn-secondary">Enviar</button>
                </form>
              </div>
              <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="block-25">
                  <ul class="list-unstyled">
                    <li class="mb-3">
                      Teléfono / Whatsapp: <a href="https://api.whatsapp.com/send?phone=5491151836386">+54 911 5183 6386</a>
                    </li>
                    <li class="mb-3">
                      Teléfono / Whatsapp: <a href="https://api.whatsapp.com/send?phone=5491135402499">+54 911 3540 2499</a>
                    </li>
                    <li class="mb-3">
                      Contacto: <a href="mailto:contacto@mueblesroci.com.ar">contacto@mueblesroci.com.ar</a>
                    </li>
                    <li class="mb-3">
                      Ventas: <a href="mailto:ventas@mueblesroci.com.ar">ventas@mueblesroci.com.ar</a>
                    </li>
                    <li class="mb-3">
                      Herrajes: <a href="mailto:herrajesdyg@mueblesroci.com.ar">herrajesdyg@mueblesroci.com.ar</a>
                    </li>
                    <li class="mb-3">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26285.251286251!2d-58.61160924145516!3d-34.56225386079205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcbbd8202f8979%3A0x449dacd78e3f0406!2sAntonio+Beruti+1257%2C+B1692BAA+El+Libertador%2C+Buenos+Aires!5e0!3m2!1ses!2sar!4v1565220178782!5m2!1ses!2sar" width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe>                 
                    </li>
                  </ul>
                </div>                 
              </div>
              
            </div>
          </div>
        </div>
      </section>
      <!-- Fin Contacto -->

    <!-- footer -->
    <?php include 'footer.php'; ?>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/main.js"></script>    
  </body>
</html>