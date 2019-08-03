<!-- Solo el formulario, se incluye en presupuestoSolicitud dinamicamente -->
<form action="<?php echo base_url();?>index.php/PresupuestoController/guardarArchivo" method="POST" enctype="multipart/form-data">  
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
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
          Paso 2: Adjunte su plano
        </a>
      </div>
      <div id="collapseThree" class="collapse" data-parent="#accordion">
        <div class="card-body">
          <div class="form-group">
            <div class="custom-file">
              <input type="file" class="form-control-file border" id="customFile" name="customFile" required>               
            </div>
          </div>

          <div class="form-group">
              <label for="mensaje">Descripción:</label>
              <textarea class="form-control" rows="5" name="mensaje"></textarea>
          </div>
        </div>
      </div>
    </div>
  </div>
  <input type="submit" class="btn btn-dark" name="enviar" value="Enviar">
</form>