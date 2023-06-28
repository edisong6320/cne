<br><br>
<style>
  .contenedor{
    box-shadow: 0px 0px 5px 1px black;
  }
</style>
<div class="container contenedor">
  <br>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h1 class="text-center">LISTADO DE CANDIDATOS</h1>
      </div>
      <div class="col-md-4 nuevo">
        <a href="<?php echo site_url(); ?>/candidatos/nuevocandidato" class="btn btn-primary">Agregar Candidatos</a>
      </div>
    </div>
  </div>
  <div class="table-responsive">
    <?php if ($candidatos): ?>
      <table class="table table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th>CEDULA DEL CANDIDATO</th>
            <th>APELIIDOS DEL CANDIDATO</th>
            <th>NOMBRES DEL CANDIDATO</th>
            <th>CELULAR DEL CANDIDATO</th>
            <th>DIGNIDAD DEL PRODUCTO</th>
            <th>IDEOLOGÍA DEL CANDIDATO</th>
            <th>MOVIMIENTO DEL CANDIDATO</th>
            <th>LATITUD DEL CANDIDATO</th>
            <th>LONGITUD DEL CANDIDATO</th>
            <th>ACCIONES</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($candidatos as $filaTemporal): ?>
            <tr>
              <td>
                <?php echo $filaTemporal->id_can ?>
              </td>
              <td>
                <?php echo $filaTemporal->cedula_can ?>
              </td>
              <td>
                <?php echo $filaTemporal->apellidos_can ?>
              </td>
              <td>
                <?php echo $filaTemporal-> nombres_can?>
              </td>
              <td>
                <?php echo $filaTemporal->celular_can ?>
              </td>
              <td>
                <?php echo $filaTemporal-> dignidad_can?>
              </td>
              <td>
                <?php echo $filaTemporal-> tipo_can?>
              </td>
              <td>
                <?php echo $filaTemporal-> movimiento_can?>
              </td>
              <td>
                <?php echo $filaTemporal-> latitud_can?>
              </td>
              <td>
                <?php echo $filaTemporal-> longitud_can?>
              </td>
              <td class="text-center">
                <a href="<?php echo site_url(); ?>/candidatos/editarcandidato/<?php echo $filaTemporal->id_can ?>" title="Editar Candidato" style="color:blue;">
                    <i class="bi bi-pencil-square"></i>
                </a>
                  &nbsp;&nbsp;&nbsp;
                <a href="<?php echo site_url(); ?>/candidatos/eliminar/<?php echo $filaTemporal->id_can ?>"title="Eliminar Candidato"> <i class="fa fa-trash text-primary"></i></a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <br>
    <?php else: ?>
      <h1 class="text-center">No existen candidatos registrados</h1>
    <?php endif; ?>
  </div>
</div>
