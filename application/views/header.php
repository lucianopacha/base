<?php 
	$header = "<div class='site-wrap'>
      <div class='site-mobile-menu'>
        <div class='site-mobile-menu-header'>
          <div class='site-mobile-menu-close mt-3'>
            <span class='icon-close2 js-menu-toggle'></span>
          </div>
        </div>
        <div class='site-mobile-menu-body'></div>
      </div> <!-- .site-mobile-menu -->
      
      <div class='site-navbar-wrap'>
        <div class='site-navbar-top'>
          <div class='container py-3'>
            <div class='row align-items-center'>
              <div class='col-6'>
                <!-- TO DO: Incluir URL de redes sociales -->
                <a href='https://www.facebook.com/Muebles-Roci-731455916944633' class='p-2 pl-0'><span class='icon-facebook'></span></a>
                <a href='#' class='p-2 pl-0'><span class='icon-instagram'></span></a>
              </div>
              <div class='col-6'>
                <div class='d-flex ml-auto'>
                  <a href='mailto:contacto@mueblesroci.com.ar' class='d-flex align-items-center ml-auto mr-4'>
                    <span class='icon-envelope mr-2'></span>
                    <span class='d-none d-md-inline-block'>contacto@mueblesroci.com.ar</span>
                  </a>
                  <a href='https://api.whatsapp.com/send?phone=5491151836386' class='d-flex align-items-center'>
                    <span class='icon-phone mr-2'></span>
                    <span class='d-none d-md-inline-block'>+54 911 5183 6386</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class='site-navbar'>
          <div class='container py-1'>
            <div class='row align-items-center'>
              <div class='col-2'>
                <h1 class='mb-0 site-logo'><a href='index.html'><img src='images/logo.jpg'></a></h1>
              </div>
              <div class='col-10'>
                <nav class='site-navigation text-right' role='navigation'>
                  <div class='container'>
                    <div class='d-inline-block d-lg-none ml-md-0 mr-auto py-3'><a href='#' class='site-menu-toggle js-menu-toggle text-white'><span class='icon-menu h3'></span></a></div>

                    <ul class='site-menu js-clone-nav d-none d-lg-block'>
                      <li><a href='#'>Home</a></li>
                      <li><a href='#TrabajosRealizados'>Trabajos Realizados</a></li>
                      <li><a href='#Presupuestos'>Presupuestos</a></li>
                      <li><a href='#Herrajes'>Herrajes</a></li>
                      <li><a href='#Contacto'>Contacto</a></li>
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class='site-blocks-cover overlay' style='background-image: url(images/hero_bg_1.jpg);' data-aos='fade' data-stellar-background-ratio='0.5'>
        <div class='container'>
          <div class='row align-items-center text-center justify-content-center'>
            <div class='col-md-8'>
              <h1>MUEBLES ROCI</h1>
              <span class='sub-text'>Dise&ntilde;o de Muebles e Interiores</span>
            </div>
          </div>
        </div>
      </div>  

      <div class='site-block-1'>
        <div class='container'>
          <div class='row'>
            <div class='col-lg-4'>
              <a href='#' class='site-block-feature d-flex p-4 rounded mb-4'>
                <div class='mr-3'>
                  <span class='icon flaticon-sit-down font-weight-light h2'></span>
                </div>
                <div class='text'>
                  <h3>Muebles</h3>
                  <p>Contamos con un amplio stock de muebles terminados en nuestro showroom.</p>
                </div>
              </a>   
            </div>
            <div class='col-lg-4'>
              <a href='#' class='site-block-feature d-flex p-4 rounded mb-4'>
                <div class='mr-3'>
                  <span class='icon flaticon-measuring font-weight-light h2'></span>
                </div>
                <div class='text'>
                  <h3>Presupuestos</h3>
                  <p>Solicite su presupuesto de su proyecto online subiendo el plano o ingresando las medidas.</p>
                </div>
              </a>
            </div>
            <div class='col-lg-4'>
              <a href='#' class='site-block-feature d-flex p-4 rounded mb-4'>
                <div class='mr-3'>
                  <span class='icon flaticon-interior-design font-weight-light h2'></span>
                </div>
                <div class='text'>
                  <h3>Furniture</h3>
                  <p>Realizamos muebles a medida para todos los ambientes del hogar.</p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>";

      echo $header;
?>