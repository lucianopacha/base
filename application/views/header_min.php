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
        <div class='site-navbar'>
          <div class='container py-1'>
            <div class='row align-items-center'>
              <div class='col-10'>
                <nav class='site-navigation text-right' role='navigation'>
                  <div class='container'>
                    <div class='d-inline-block d-lg-none ml-md-0 mr-auto py-3'><a href='#' class='site-menu-toggle js-menu-toggle text-white'><span class='icon-menu h3'></span></a></div>

                    <ul class='site-menu js-clone-nav d-none d-lg-block'>
                      <li><a href='index.html'>Home</a></li>
                      <li><a href='#TrabajosRealizados'>Trabajos Realizados</a></li>
                      <li><a href='projects.html'>Presupuestos</a></li>
                      <li><a href='news.html'>Herrajes</a></li>
                      <li><a href='contact.html'>Contacto</a></li>
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>";

      echo $header;
?>