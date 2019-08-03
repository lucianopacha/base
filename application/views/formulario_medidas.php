<!-- Solo el formulario, se incluye en presupuestoSolicitud dinamicamente -->
<form action="<?php echo base_url();?>index.php/PresupuestoController/grabarPresupuesto" method="POST">  
  <div id="accordion">
    <div class="card">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#collapseOne">
          Paso 1: Ingrese sus datos
        </a>
      </div>
      <div id="collapseOne" class="collapse show" data-parent="#accordion">
        <div class="card-body">
          <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input class="form-control" type="text" name="nombre" required>
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input class="form-control" type="email" name="email" required>
           </div>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
          Paso 2: Seleccione el material
        </a>
      </div>
      <div id="collapseTwo" class="collapse" data-parent="#accordion">
        <div class="card-body">
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="optradio" value="faplac" checked> Placa Faplac
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="optradio" value="faplac"> Placa Masisa
            </label>
          </div>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
          Paso 3: Ingrese las medidas
        </a>
      </div>
      <div id="collapseThree" class="collapse" data-parent="#accordion">
        <div class="card-body">
          <div class="form-group">
            <label for="alto">Alto (cm):</label>
              <input class="form-control" type="number" name="alto" required>
          </div>
          <div class="form-group">
              <label for="ancho">Ancho (cm):</label>
              <input class="form-control" type="number" name="ancho" required>
          </div>
          <div class="form-group">
              <label for="descripcion">Descripción:</label>
              <textarea class="form-control" rows="5" name="descripcion"  required></textarea>
          </div>
        </div>
      </div>
    </div>
  </div>
  <input type="submit" class="btn btn-dark" name="enviar" value="Enviar">
</form>