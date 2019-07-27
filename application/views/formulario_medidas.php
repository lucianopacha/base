    <form action="<?php echo base_url();?>index.php/PresupuestoController/grabarPrespuesto" method="POST">
      <div class="container">
        <h2>Presupuesto</h2>
        <p>Solicite su presupuesto completando 3 simples pasos.</p>
        <div class="panel-group" id="accordion">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Paso 1: Ingrese sus datos</a>
              </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse in">
              <div class="panel-body">              
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                      <input class="form-control" type="text" name="nombre">
                  </div>
                  <div class="form-group">
                      <label for="email">Email:</label>
                      <input class="form-control" type="email" name="email">
                  </div>
               </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Paso 2: Seleccione el material</a>
              </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
              <div class="panel-body">
                <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="optradio"> Placa Faplac
                    </label>
                  </div>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" name="optradio"> Placa Masisa
                    </label>
                  </div>        
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Paso 3: Ingrese las medidas</a>
              </h4>
            </div>
            <div id="collapse3" class="panel-collapse collapse">
              <div class="panel-body">
                <div class="form-group">
                    <label for="alto">Alto (cm):</label>
                      <input class="form-control" type="text" name="alto">
                  </div>
                  <div class="form-group">
                      <label for="ancho">Ancho (cm):</label>
                      <input class="form-control" type="text " name="ancho">
                  </div>
            <div class="form-group">
                      <label for="descripcion">Descripción:</label>
                      <textarea class="form-control" rows="5" name="descripcion"></textarea>
                  </div>
              </div>
            </div>
          </div>
        </div> 
      </div>
      <input type="submit" name="enviar" value="Enviar">
    </form>  