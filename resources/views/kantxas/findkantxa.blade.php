<!DOCTYPE html>
<html>
  <head>
    <title>PlaceID finder</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
      .controls {
        background-color: #fff;
        border-radius: 2px;
        border: 1px solid transparent;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        box-sizing: border-box;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        height: 29px;
        margin-left: 17px;
        margin-top: 10px;
        outline: none;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 400px;
      }

      .controls:focus {
        border-color: #4d90fe;
      }

    </style>
  </head>
  <body>
    <input id="pac-input" class="controls" type="text"
        placeholder="Enter a location">
    <div id="map"></div>

    <script>
// This sample uses the Place Autocomplete widget to allow the user to search
// for and select a place. The sample then displays an info window containing
// the place ID and other information about the place that the user has
// selected.

function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 43.2676907, lng: -1.9742775},
    zoom: 13
  });

  var input = document.getElementById('pac-input');

  var autocomplete = new google.maps.places.Autocomplete(input);
  autocomplete.bindTo('bounds', map);

  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

  var infowindow = new google.maps.InfoWindow();
  var marker = new google.maps.Marker({
    map: map
  });
  marker.addListener('click', function() {
    infowindow.open(map, marker);
  });

  autocomplete.addListener('place_changed', function() {
    infowindow.close();
    var place = autocomplete.getPlace();
    if (!place.geometry) {
      return;
    }

    if (place.geometry.viewport) {
      map.fitBounds(place.geometry.viewport);
    } else {
      map.setCenter(place.geometry.location);
      map.setZoom(17);
    }

    // Set the position of the marker using the place ID and location.
    marker.setPlace({
      placeId: place.place_id,
      location: place.geometry.location
    });
    marker.setVisible(true);

    infowindow.setContent('<div><strong>' + place.name + '</strong> <a href="/create/kantxa/' + place.name + '/' + place.place_id + '">' + 'Crear ' + place.name + '</strong></a><br>' +
        'Place ID: ' + place.place_id + '<br>' +
        place.formatted_address);
    infowindow.open(map, marker);
  });
}

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD4YZR4_SBmFpOKo09NnGG_BCDsR-jm6N4&libraries=places&callback=initMap"
        async defer></script>
  </body>
</html>