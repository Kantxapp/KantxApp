@extends('layouts.app')
@section('title', 'Create Kantxa')

@section('content')


<section class="mbr-section" id="form1-1" style="background-color: rgb(61, 142, 185); padding-top: 120px; padding-bottom: 120px;">
    
    <div class="mbr-section mbr-section__container mbr-section__container--middle">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-center">
                    <h3 class="mbr-section-title display-2">{{$name}}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="mbr-section mbr-section-nopadding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1" data-form-type="formoid">

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('kantxa.save') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" id="name" name="name" value="{{$name}}">

                        <div class="row row-sm-offset">
                            <div class="col-xs-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-8-avatar">Foto Kantxa</label>
                                    <input id="kantxaPic" type="file" class="form-control" name="kantxaPic">
                                </div>
                            </div>
                            
                            <div class="col-xs-4 col-md-2">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-8-name">Número</label>
                                    @if(isset($streetNumber))
                                    <input id="streetNumber" type="text" class="form-control" name="streetNumber" value="{{$streetNumber}}">
                                    @else
                                    <input id="streetNumber" type="text" class="form-control" name="streetNumber" >
                                    @endif
                                </div>
                            </div>
                            
                            <div class="col-xs-8 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-8-surname1">Calle</label>
                                    @if(isset($route))
                                    <input id="route" type="text" class="form-control" name="route" value="{{$route}}">
                                    @else
                                    <input id="route" type="text" class="form-control" name="route">
                                    @endif
                                </div>
                            </div>
                            <div class="col-xs-8 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-8-surname2">Municipio</label>
                                    @if(isset($locality))
                                    <input id="locality" type="text" class="form-control" name="locality" value="{{$locality}}">
                                    @else
                                    <input id="locality" type="text" class="form-control" name="locality">
                                    @endif
                                </div>
                            </div>
                            <div class="col-xs-4 col-md-2">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-8-surname2">Provincia</label>
                                    @if(isset($province))
                                    <input id="province" type="text" class="form-control" name="province" value="{{$province}}">
                                    @else
                                    <input id="province" type="text" class="form-control" name="province">
                                    @endif
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-8-surname1">Dirección</label>
                                    @if(isset($formatedAddress))
                                    <input id="formatedAddress" type="text" class="form-control" name="formatedAddress" value="{{$formatedAddress}}">
                                    @else
                                    <input id="formatedAddress" type="text" class="form-control" name="formatedAddress">
                                    @endif
                                </div>
                            </div>
                            <div class="col-xs-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-8-surname1">Latitud</label>
                                    <input id="lat" type="text" class="form-control" name="lat" value="{{$lat}}">
                                </div>
                            </div>
                            <div class="col-xs-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-8-surname1">Longitud</label>
                                    <input id="lng" type="text" class="form-control" name="lng" value="{{$lng}}">
                                </div>
                            </div>
                            <div class="col-xs-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-8-surname1">Map ID</label>
                                    <input id="place_id" type="text" class="form-control" name="place_id" value="{{$place_id}}">
                                </div>
                            </div>
                            <div class="col-xs-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-8-surname1">Sensor ID</label>
                                    <input id="sensor_id" type="text" class="form-control" name="sensor_id">
                                </div>
                            </div>

                        <div class="col-xs-12 col-md-12"><button type="submit" class="btn btn-success col-xs-12 col-md-12">GUARDAR</button></div>
                        @if (count($errors) > 0)
                        <div class="col-xs-12 col-md-12">
                                <div class="form-group">
                                    <div class="alert alert-danger alert-dismissible fade in" role="alert">
                                <button type="button" class="close " data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div> 
                                </div>
                            </div>
                        @endif
                                                   
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mbr-section mbr-section-nopadding" id="map1-0" >
    <div class="mbr-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyD4YZR4_SBmFpOKo09NnGG_BCDsR-jm6N4&amp;q=place_id:{{$place_id}}" allowfullscreen=""></iframe></div>
</section>
@endsection