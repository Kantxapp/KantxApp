<template>
<div class="container">
    <div class="row">
        <div class="col-md-8 ">
            <div class="panel panel-default">
                <div class="panel-heading">
                    </br>
                    </br>
                    </br>
                    </br>
                     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmIWAI_z2OY5Hpa8MqGKzHVwfulWZXK88&libraries=places&callback=initMap"
        async defer></script>
                </div>
                <div class="panel-body">
                     <input id="pac-input" class="controls" type="text" placeholder="Buscar la localización">
                    <div id="type-selector" class="controls">
                      <input type="radio" name="type" id="changetype-all" checked="checked">
                      <label for="changetype-all">All</label>
                
                      <input type="radio" name="type" id="changetype-establishment">
                      <label for="changetype-establishment">Establecimientos</label>
                
                      <input type="radio" name="type" id="changetype-address">
                      <label for="changetype-address">Direcciones</label>
                
                      <input type="radio" name="type" id="changetype-geocode">
                      <label for="changetype-geocode">Geocodes</label>
                    </div>
                    <div id="map"></div>

                </div>
                
            </div>
        </div>
        <div class="col-md-3 " style="margin-left: 5px">
            </br>
            </br>
            </br>
            </br>
            <div class="bottom-buffer bottom-bordered" >
                <div class="form-inline right-buffer text-center">
                    <div class="form-group">
                        <form action="">
                            <label> Introduzca Una Fecha:</label>
                            <input type="date" class="form-control" aria-describedby="basic-addon1"/>
                        </form>
                    </div>
                </div>                    
            </div>
            </br>
            </br>
            </br>
            </br>
           <div class="form-inline right-buffer text-center top-buffer" >
                <div class="form-group left-buffer-info" >
                    <label for="filter" class="lead">Eventos </label>
                    <select class="form-control input-lg" name="Evento" id="BusEvento" style="max-width:190px">
                        <option value="todosEvent">Todos los eventos</option>
                        <option value="misDeport">De mis deportes</option>
                        <option value="amigGrups">De mis amigos y grupos</option>
                    </select>
                        </br>
                        </br>
                        <div class="list-group" id="div_todosEvent">
                          <a href="#" class="list-group-item "> 12:00 </a></br>
                          <a href="#" class="list-group-item "> Cras justo odio</a></br>
                          <a href="#" class="list-group-item "> Cras justo odio</a></br>
                          <a href="#" class="list-group-item "> Cras justo odio</a></br>
                          <a href="#" class="list-group-item "> Cras justo odio</a></br>
                        </div>
                       <div class="list-group" id="div_misDeport">
                          <a href="#" class="list-group-item "> Cras justo odio</a></br>
                          <a href="#" class="list-group-item "> Cras justo odio</a></br>
                          <a href="#" class="list-group-item "> Cras justo odio</a></br>
                          <a href="#" class="list-group-item "> Cras justo odio</a></br>
                        </div>
                        <div class="list-group" id="amigGrups">
                          <a href="#" class="list-group-item "> Cras justo odio</a></br>
                          <a href="#" class="list-group-item "> Cras justo odio</a></br>
                          <a href="#" class="list-group-item "> Cras justo odio</a></br>
                        </div>
                     
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 43.3275473, lng: -1.9712059},
    zoom: 13
  });
  var input = /** @type {!HTMLInputElement} */(
      document.getElementById('pac-input'));

  var types = document.getElementById('type-selector');
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(types);

  var autocomplete = new google.maps.places.Autocomplete(input);
  autocomplete.bindTo('bounds', map);

  var infowindow = new google.maps.InfoWindow();
  var marker = new google.maps.Marker({
    map: map,
    anchorPoint: new google.maps.Point(0, -29)
  });

  autocomplete.addListener('place_changed', function() {
    infowindow.close();
    marker.setVisible(false);
    var place = autocomplete.getPlace();
    if (!place.geometry) {
      window.alert("Autocomplete's returned place contains no geometry");
      return;
    }

    // If the place has a geometry, then present it on a map.
    if (place.geometry.viewport) {
      map.fitBounds(place.geometry.viewport);
    } else {
      map.setCenter(place.geometry.location);
      map.setZoom(17);  // Why 17? Because it looks good.
    }
    marker.setIcon(/** @type {google.maps.Icon} */({
      url: place.icon,
      size: new google.maps.Size(71, 71),
      origin: new google.maps.Point(0, 0),
      anchor: new google.maps.Point(17, 34),
      scaledSize: new google.maps.Size(35, 35)
    }));
    marker.setPosition(place.geometry.location);
    marker.setVisible(true);

    var address = '';
    if (place.address_components) {
      address = [
        (place.address_components[0] && place.address_components[0].short_name || ''),
        (place.address_components[1] && place.address_components[1].short_name || ''),
        (place.address_components[2] && place.address_components[2].short_name || '')
      ].join(' ');
    }

    infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
    infowindow.open(map, marker);
  });

  // Sets a listener on a radio button to change the filter type on Places
  // Autocomplete.
  function setupClickListener(id, types) {
    var radioButton = document.getElementById(id);
    radioButton.addEventListener('click', function() {
      autocomplete.setTypes(types);
    });
  }

  setupClickListener('changetype-all', []);
  setupClickListener('changetype-address', ['address']);
  setupClickListener('changetype-establishment', ['establishment']);
  setupClickListener('changetype-geocode', ['geocode']);
}
//Eventos
 $(document).ready(function(){
    $(".list-group").hide();
    $("#BusEvento").change(function(){
    $(".list-group").hide();
    $("#div_" + $(this).val()).show();
    });
});
      export default {
            mounted() {

            },
            methods: {

            }
      }
</script>