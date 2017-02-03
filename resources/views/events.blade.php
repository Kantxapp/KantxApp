@extends('layouts.map')

@section('content')
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
                        <div class="list-group" id="div_todosEvent" data-toggle="modal" data-target="#exampleModal">
                          <a href="#" class="list-group-item "> 12:00 Bicicleta de montaña</a></br>
                          <a href="#" class="list-group-item "> 14:45 Futbol con once jugadores</a></br>
                          <a href="#" class="list-group-item "> 17:30 Judo</a></br>
                          <a href="#" class="list-group-item "> 09:00 Motociclismo</a></br>
                          <a href="#" class="list-group-item "> 20:30 Taekwondo</a></br>
                        </div>
                       <div class="list-group" id="div_misDeport" data-toggle="modal" data-target="#exampleModal">
                          <a href="#" class="list-group-item "> 12:45 Tenis</a></br>
                          <a href="#" class="list-group-item "> 16:00 Futbol con siete jugadores</a></br>
                          <a href="#" class="list-group-item "> 13:45 Futbol sala</a></br>
                          <a href="#" class="list-group-item "> 08:30 Running</a></br>
                        </div>
                        <div class="list-group" id="div_amigGrups" data-toggle="modal" data-target="#exampleModal">
                          <a href="#" class="list-group-item "> 12:00 Voleibol</a></br>
                          <a href="#" class="list-group-item "> 11:15 Padel</a></br>
                          <a href="#" class="list-group-item "> 10:20 Frontenis</a></br>
                        </div>
                     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="exampleModalLabel">Se ha unido al evento!</h4>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection