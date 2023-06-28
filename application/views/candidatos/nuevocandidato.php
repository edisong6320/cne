<br>
<style>
  .contenedor{
    box-shadow: 0px 0px 5px 1px black;
  }
</style>
<div class="container contenedor">
  <br>
  <h1 class="text-center">NUEVO CANDIDATO</h1>
  <br>
  <form class="" action="<?php echo site_url(); ?>/candidatos/guardarcandidato" method="post">
    <div class="container">
      <div class="row">
          <div class="col-md-6">
            <label for="">Cedula del Candidato</label>
            <br>
            <input type="number" placeholder="Ingrese la cedula del candidato" class="form-control" name="cedula_can" value="" id="cedula_can">
          </div>
          <div class="col-md-6">
            <label for="">Apellidos del Candidato</label>
            <br>
            <input type="text" placeholder="Ingrese los apellidos del candidato" class="form-control" name="apellidos_can" value="" id="apellidos_can">
          </div>
      </div>
      <br>
      <div class="row">
          <div class="col-md-6">
            <label for="">Nombres del Candidato</label>
            <br>
            <input type="text" placeholder="Ingrese los nombres del candidato" class="form-control" name="nombres_can" value="" id="nombres_can">
          </div>
          <div class="col-md-6">
            <label for="">Celular del candidato</label>
            <br>
            <input type="number" placeholder="Ingrese el numero de celular del candidato" class="form-control" name="celular_can" value="" id="celular_can">
          </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-6">
          <label for="">Dignidad del candidato</label>
          <br>
          <select name="dignidad_can" id="dignidad_can" class="form-control">
            <option disabled selected hidden>Seleccione la dignidad a la que desea aplicar el candidato</option>
            <option>Presidente</option>
            <option>Asambleista Nacional</option>
            <option>Asambleista Provincial</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="">Ideología del candidato</label>
          <br>
          <select name="tipo_can" id="tipo_can" class="form-control">
            <option disabled selected hidden>Seleccione la ideología del candidato</option>
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
          <input type="text" placeholder="Ingrese el movimiento politico al que pertence el candidato" class="form-control" name="movimiento_can" value="" id="movimiento_can">
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-md-6">
          <label for="">Latitud del candidato</label>
          <input type="text" placeholder="Ingrese la latitud de la dirección candidato" class="form-control" readonly name="latitud_can" value="" id="latitud_can">
        </div>
        <div class="col-md-6">
          <label for="">Longitud del candidato</label>
          <input type="text" placeholder="Ingrese la longitud de la dirección candidato" class="form-control" readonly name="longitud_can" value="" id="longitud_can">
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
          var centro=new google.maps.LatLng(-1.2595931997473242, -78.54164276317397);
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
