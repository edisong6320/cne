<br><br>
<style>
  .contenedor{
    box-shadow: 0px 0px 5px 1px black;
  }
</style>
<div class="container contenedor">
  <br>
  <h1 class="text-center">UBICACIONES DE LOS CANDIDATOS</h1>
  <hr>
  <br>
  <div class="row">
    <div class="col-md-2">
      <br><br>
      <h4>PRESIDENTES</h4> &nbsp &nbsp <img src="<?php echo base_url() ?>/assets/images/marcapre.png" alt="">
      <br> <br>
      <h4>ASAMBLEISTAS NACIONALES</h4> <img src="<?php echo base_url() ?>/assets/images/markan.png" alt="">
      <br> <br>
      <h4>ASAMBLEISTAS PROVINCIALES</h4> &nbsp <img src="<?php echo base_url() ?>/assets/images/marcap.png" alt="">
    </div>
    <div class="col-md-10">
      <div id="mapaCandidatos" style="height:500px; width:100%;border:2px solid black;"></div>
    </div>
  </div>
  		<script type="text/javascript">
  			function initMap(){
  				var centro=new google.maps.LatLng(-1.2595931997473242, -78.54164276317397);
  				var mapaCandidatos=new google.maps.Map(document.getElementById('mapaCandidatos'),
  					{
  						center:centro,
  						zoom:7,
  						mapTypeId:google.maps.MapTypeId.ROADMAP
  					}
  				);
          <?php if($candidatospre): ?>
  					<?php foreach ($candidatospre as $ubicacionTemporal): ?>
  					var coordenadTemporal=new google.maps.LatLng(<?php echo $ubicacionTemporal->latitud_can; ?>, <?php echo $ubicacionTemporal->longitud_can; ?>);
  					var marcador=new google.maps.Marker(
  						{
  							position:coordenadTemporal,
  							title:"<?php echo $ubicacionTemporal->apellidos_can; ?> <?php echo $ubicacionTemporal->nombres_can ?> para el cargo de <?php echo $ubicacionTemporal->dignidad_can ?>",
                map:mapaCandidatos
  						}
  					);
  					<?php endforeach; ?>
  				<?php endif; ?>

          <?php if($candidatosan): ?>
  					<?php foreach ($candidatosan as $ubicacionTemporal): ?>
  					var coordenadTemporal=new google.maps.LatLng(<?php echo $ubicacionTemporal->latitud_can; ?>, <?php echo $ubicacionTemporal->longitud_can; ?>);
  					var marcador=new google.maps.Marker(
  						{
  							position:coordenadTemporal,
  							title:"<?php echo $ubicacionTemporal->apellidos_can; ?> <?php echo $ubicacionTemporal->nombres_can ?> para el cargo de <?php echo $ubicacionTemporal->dignidad_can ?>",
                icon:"<?php echo base_url() ?>/assets/images/markan.png",
                map:mapaCandidatos
  						}
  					);
  					<?php endforeach; ?>
  				<?php endif; ?>

          <?php if($candidatosap): ?>
  					<?php foreach ($candidatosap as $ubicacionTemporal): ?>
  					var coordenadTemporal=new google.maps.LatLng(<?php echo $ubicacionTemporal->latitud_can; ?>, <?php echo $ubicacionTemporal->longitud_can; ?>);
  					var marcador=new google.maps.Marker(
  						{
  							position:coordenadTemporal,
  							title:"<?php echo $ubicacionTemporal->apellidos_can; ?> <?php echo $ubicacionTemporal->nombres_can ?> para el cargo de <?php echo $ubicacionTemporal->dignidad_can ?>",
                icon:"<?php echo base_url() ?>/assets/images/marcap.png",
                map:mapaCandidatos
  						}
  					);
  					<?php endforeach; ?>
  				<?php endif; ?>
  			}//cierre de la funcion initMap
  		</script>
      <br>
</div>
