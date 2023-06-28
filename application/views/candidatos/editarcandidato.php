<br>
<style>
  .contenedor{
    box-shadow: 0px 0px 5px 1px black;
  }
</style>
<div class="container contenedor">
  <br>
  <h1 class="text-center">ACTUALIZAR DATOS DEL CANDIDATO</h1>
  <br>
  <form class="" action="<?php echo site_url(); ?>/candidatos/procesarActualizacion" method="post">
    <div class="container">
      <div class="row">
          <div class="col-md-6">
            <input type="hidden" name="id_can" id="id_can" value="<?php echo $candidatoEditar->id_can; ?>">
            <label for="">Cedula del Candidato</label>
            <br>
            <input type="number" placeholder="Ingrese la cedula del candidato" class="form-control" name="cedula_can" value="<?php echo $candidatoEditar->cedula_can; ?>" id="cedula_can">
          </div>
          <div class="col-md-6">
            <label for="">Apellidos del Candidato</label>
            <br>
            <input type="text" placeholder="Ingrese los apellidos del candidato" class="form-control" name="apellidos_can" value="<?php echo $candidatoEditar->apellidos_can; ?>" id="apellidos_can">
          </div>
      </div>
      <br>
      <div class="row">
          <div class="col-md-6">
            <label for="">Nombres del Candidato</label>
            <br>
            <input type="text" placeholder="Ingrese los nombres del candidato" class="form-control" name="nombres_can" value="<?php echo $candidatoEditar->nombres_can; ?>" id="nombres_can">
          </div>
          <div class="col-md-6">
            <label for="">Celular del candidato</label>
            <br>
            <input type="number" placeholder="Ingrese el numero de celular del candidato" class="form-control" name="celular_can" value="<?php echo $candidatoEditar->celular_can; ?>" id="celular_can">
          </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-6">
          <label for="">Dignidad del candidato</label>
          <br>
          <select name="dignidad_can" id="dignidad_can" value="" class="form-control">
            <option value="<?php echo $candidatoEditar->dignidad_can; ?>"><?php echo $candidatoEditar->dignidad_can; ?></option>
            <option>Presidente</option>
            <option>Asambleista Nacional</option>
            <option>Asambleista Provincial</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="">Ideología del candidato</label>
          <br>
          <select name="tipo_can" id="tipo_can" class="form-control">
            <option value="<?php echo $candidatoEditar->tipo_can; ?>"><?php echo $candidatoEditar->tipo_can; ?></option>
            <option>Derecha</option>
            <option>Izquierda</option>
          </select>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-12">
          <label for="">Movimiento politico del candidato</label>
          <br>
          <input type="text" placeholder="Ingrese el movimiento politico al que pertence el candidato" class="form-control" name="movimiento_can" value="<?php echo $candidatoEditar->movimiento_can; ?>" id="movimiento_can">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-6">
          <label for="">Latitud del candidato</label>
          <input type="text" placeholder="Ingrese la latitud de la dirección candidato" class="form-control" readonly name="latitud_can" value="<?php echo $candidatoEditar->latitud_can; ?>" id="latitud_can">
        </div>
        <div class="col-md-6">
          <label for="">Longitud del candidato</label>
          <input type="text" placeholder="Ingrese la longitud de la dirección candidato" class="form-control" readonly name="longitud_can" value="<?php echo $candidatoEditar->longitud_can; ?>" id="longitud_can">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-12">
          <div id="mapaUbicacion" style="height:300px; width:100%; border:2px solid black;"></div>
        </div>
      </div>
      <script type="text/javascript">
        function initMap(){
          var centro=new google.maps.LatLng(<?php echo $candidatoEditar->latitud_can; ?>, <?php echo $candidatoEditar->longitud_can; ?>);
          var mapa1=new google.maps.Map(
            document.getElementById('mapaUbicacion'),
            {
              center:centro,
              zoom:7,
              mapTypeId:google.maps.MapTypeId.ROADMAP
            }
          );

          var marcador=new google.maps.Marker(
            {
              position:centro,
              map:mapa1,
              title:"Seleccione la dirección",
              draggable:true
            }
          );
          google.maps.event.addListener(marcador,'dragend',function(){
            // alert("Se termino el drag");
            document.getElementById('latitud_can').value=this.getPosition().lat();
            document.getElementById('longitud_can').value=this.getPosition().lng();
          });
        }//cierre de la funcion initMap
      </script>
      <br><br>
      <div class="col-md-12 text-center">
        <button type="submit" name="button" class="btn btn-primary">GUARDAR</button>
        &nbsp
        <a href="<?php echo site_url(); ?>/candidatos/listadocandidato" class="btn btn-danger">CANCELAR</a>
           </div>
      </div>
      <br><br>
    </div
  </form>
</div>
