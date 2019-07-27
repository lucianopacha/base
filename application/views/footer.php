<?php
	$footer = "<footer id='footer' class='site-footer border-top'>
        <div class='container'>
          <div class='row'>
            <div class='col-lg-4 mb-5 mb-lg-0'>
              <div class='row mb-5'>
                <div class='col-md-12'>
                  <h3 class='footer-heading mb-4'>Navegación</h3>
                </div>

                <div class='col-md-6 col-lg-6'>
                  <ul class='list-unstyled'>
                    <li><a href='".base_url()."'>Home</a></li>
                    <li><a href='".base_url()."#TrabajosRealizados'>Trabajos Realizados</a></li>
                    <li><a href='".base_url()."#Presupuestos'>Presupuestos</a></li>
                  </ul>
                </div>

                <div class='col-md-6 col-lg-6'>
                  <ul class='list-unstyled'>
                    <li><a href='".base_url()."#Herrajes'>Herrajes</a></li>
                    <li><a href='".base_url()."#Contacto'>Contacto</a></li>
                  </ul>
                </div>
              </div>
            </div>

            <div class='col-lg-4'>
              <div class='mb-5'>
                <h3 class='footer-heading mb-4'>Contacto</h3>
                <div class='block-25'>
                  <ul class='list-unstyled'>
                    <li class='mb-3'>
                      Teléfono / Whatsapp: <a href='https://api.whatsapp.com/send?phone=5491151836386'>+54 911 5183 6386</a>
                    </li>
                    <li class='mb-3'>
                      Teléfono / Whatsapp: <a href='https://api.whatsapp.com/send?phone=5491135402499'>+54 911 3540 2499</a>
                    </li>
                    <li class='mb-3'>
                      Contacto: <a href='mailto:contacto@mueblesroci.com.ar'>contacto@mueblesroci.com.ar</a>
                    </li>
                    <li class='mb-3'>
                      Ventas: <a href='mailto:ventas@mueblesroci.com.ar'>ventas@mueblesroci.com.ar</a>
                    </li>
                    <li class='mb-3'>
                      Herrajes: <a href='mailto:herrajesdyg@mueblesroci.com.ar'>herrajesdyg@mueblesroci.com.ar</a>
                    </li>
                  </ul>
                </div>
              </div>
              
            </div>
            

            <div class='col-lg-4 mb-5 mb-lg-0'>
              <div class='row'>
                <div class='col-md-12'>
                  <h3 class='footer-heading mb-4'>Seguinos en redes sociales</h3>
                  <div>
                    <a href='https://www.facebook.com/Muebles-Roci-731455916944633' class='pl-0 pr-3'><span class='icon-facebook'></span></a>
                    <a href='#' class='pl-3 pr-3'><span class='icon-instagram'></span></a>
                  </div>
                  <br>
                  <div>
                    <h3 class='footer-heading mb-4'>Medio de pago</h3>
                    <img src='".base_url()."images/ahora12.png' alt='Ahora 12'> 
                  </div>
                </div>
              </div>
            </div>
            
          </div>
          <div class='row pt-5 mt-5 text-center'>
            <div class='col-md-12'>
              <p>
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | Sitio desarrollado </i> por <a href='https://www.becamsistemas.com.ar/' target='_blank' >Becam Sistemas</a>
              </p>
            </div>
            
          </div>
        </div>
      </footer>";

      echo $footer;
?>