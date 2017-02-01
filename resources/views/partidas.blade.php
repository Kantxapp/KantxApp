@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5 ">
            <div class="panel panel-default">
                <div class="panel-heading">
                    </br>
                    </br>
                    </br>
                    </br>
                     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCLNDDoIJy4ZFyAKX3KZ9zIPMKA15q4vD4&callback=initMap" async defer></script>
                </div>
                <div class="panel-body">
                      <div id="locationField">
                      <input id="autocomplete" placeholder="Enter a city" type="text" />
                    </div>

                     <div id="map" class="mapa"></div>
                     <div id="listing">
                      <table id="resultsTable">
                        <tbody id="results"></tbody>
                      </table>
                    </div>
                
                    <div style="display: none">
                      <div id="info-content">
                        <table>
                          <tr id="iw-url-row" class="iw_table_row">
                            <td id="iw-icon" class="iw_table_icon"></td>
                            <td id="iw-url"></td>
                          </tr>
                          <tr id="iw-address-row" class="iw_table_row">
                            <td class="iw_attribute_name">Address:</td>
                            <td id="iw-address"></td>
                          </tr>
                          <tr id="iw-phone-row" class="iw_table_row">
                            <td class="iw_attribute_name">Telephone:</td>
                            <td id="iw-phone"></td>
                          </tr>
                          <tr id="iw-rating-row" class="iw_table_row">
                            <td class="iw_attribute_name">Rating:</td>
                            <td id="iw-rating"></td>
                          </tr>
                          <tr id="iw-website-row" class="iw_table_row">
                            <td class="iw_attribute_name">Website:</td>
                            <td id="iw-website"></td>
                          </tr>
                        </table>
                      </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="col-md-6 " style="margin-left: 55px">
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
                    <select class="form-control input-lg" name="filter" id="filter" style="max-width:190px">
                        <option value="1">Todos los eventos</option>
                        <option value="2" selected>De mis deportes</option>
                        <option value="3">De mis amigos y grupos</option>
                    </select>
                    
                </div>
                <!--<div class="form-group left-buffer-info" id="provincia-input">                        -->
                <!--    <label for="provincia" class="lead">Provincia</label>-->
                <!--        <select name="provincia" class="form-control input-lg" id="provincia" style="max-width:190px">-->
                <!--                  <option value='0'>Eventos interesantes</option>-->
                <!--                  <option value='15'>A Coruña</option>-->
                <!--                  <option value='1'>Álava</option>-->
                <!--                  <option value='2'>Albacete</option>-->
                <!--                  <option value='3'>Alicante</option>-->
                <!--                  <option value='4'>Almería</option>-->
                <!--                  <option value='33'>Asturias</option>-->
                <!--                  <option value='5'>Ávila</option>-->
                <!--                  <option value='6'>Badajoz</option>-->
                <!--                  <option value='7'>Baleares (Illes)</option>-->
                <!--                  <option value='8'>Barcelona</option>-->
                <!--                  <option value='9'>Burgos</option>-->
                <!--                  <option value='10'>Cáceres</option>-->
                <!--                  <option value='11'>Cádiz</option>-->
                <!--                  <option value='39'>Cantabria</option>-->
                <!--                  <option value='12'>Castellón</option>-->
                <!--                  <option value='51'>Ceuta</option>-->
                <!--                  <option value='13'>Ciudad Real</option>-->
                <!--                  <option value='14'>Córdoba</option>-->
                <!--                  <option value='16'>Cuenca</option>-->
                <!--                  <option value='17'>Girona</option>-->
                <!--                  <option value='18'>Granada</option>-->
                <!--                  <option value='19'>Guadalajara</option>-->
                <!--                  <option value='20'>Guipúzcoa</option>-->
                <!--                  <option value='21'>Huelva</option>-->
                <!--                  <option value='22'>Huesca</option>-->
                <!--                  <option value='23'>Jaén</option>-->
                <!--                  <option value='26'>La Rioja</option>-->
                <!--                  <option value='35'>Las Palmas</option>-->
                <!--                  <option value='24'>León</option>-->
                <!--                  <option value='25'>Lleida</option>-->
                <!--                  <option value='27'>Lugo</option>-->
                <!--                  <option value='28'>Madrid</option>-->
                <!--                  <option value='29'>Málaga</option>-->
                <!--                  <option value='52'>Melilla</option>-->
                <!--                  <option value='30'>Murcia</option>-->
                <!--                  <option value='31'>Navarra</option>-->
                <!--                  <option value='32'>Ourense</option>-->
                <!--                  <option value='34'>Palencia</option>-->
                <!--                  <option value='36'>Pontevedra</option>-->
                <!--                  <option value='37'>Salamanca</option>-->
                <!--                  <option value='38'>Santa Cruz de Tenerife</option>-->
                <!--                  <option value='40'>Segovia</option>-->
                <!--                  <option value='41'>Sevilla</option>-->
                <!--                  <option value='42'>Soria</option>-->
                <!--                  <option value='43'>Tarragona</option>-->
                <!--                  <option value='44'>Teruel</option>-->
                <!--                  <option value='45'>Toledo</option>-->
                <!--                  <option value='46'>Valencia</option>-->
                <!--                  <option value='47'>Valladolid</option>-->
                <!--                  <option value='48'>Vizcaya</option>-->
                <!--                  <option value='49'>Zamora</option>-->
                <!--                  <option value='50'>Zaragoza</option>-->
                <!--        </select>-->
                <!--</div>-->
            </div>
            
            <!--<div class="pull-right">-->
            <!--    <a href="#" >Mis Eventos</a> | <a href="#">Eventos Jugados</a>-->
            <!--</div>-->
            <!--<div class="clearfix"></div>-->
        </div>
    </div>
</div>
@endsection