<br><br>
<style>
  .contenedor{
    box-shadow: 0px 0px 5px 1px black;
  }
</style>
<div class="container contenedor">
  <br>
  <h1 class="text-center">UBICACIONES DE LOS PRESIDENTES</h1>
      <div class="col-md-12">
  			<div id="mapaPresidentes" style="height:500px; width:100%;border:2px solid black;"></div>
  		</div>
  		<script type="text/javascript">
  			function initMap(){
  				var centro=new google.maps.LatLng(-1.2595931997473242, -78.54164276317397);
  				var mapaPresidentes=new google.maps.Map(document.getElementById('mapaPresidentes'),
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
                map:mapaPresidentes
  						}
  					);
  					<?php endforeach; ?>
  				<?php endif; ?>
  			}//cierre de la funcion initMap
  		</script>
      <br>
</div>
