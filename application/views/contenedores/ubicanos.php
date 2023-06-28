<div id="ubicanos"class="row text-center">
  <h1 class="text-center" >UBÍCANOS</h1>
  <h3>Nos encontramos ubicados en la Av. 6 de Diciembre N33-122 y Bosmediano</h3>
  <div id="mapaDireccion" style="width:100%; height:300px;"></div>
  <script type="text/javascript">
         function initMap(){
             // creando el punto central del mapa
             var coordenadaCentral=new google.maps.LatLng(-0.18779260865099198, -78.47941640420844);
             //Creando el mapa
             var mapa1=new google.maps.Map(document.getElementById('mapaDireccion'),
             {
                 center:coordenadaCentral,
                 zoom:17,
                 mapTypeId:google.maps.MapTypeId.ROADMAP
             }
             );
             var marcador1=new google.maps.Marker(
              {
                position:coordenadaCentral,
                map:mapa1,
                title:"Consejo Nacional Electoral",
                icon:"<?php echo base_url() ?>/assets/images/marcapre.png"
              }
            );
         }
     </script>
     <br><br>
</div>
