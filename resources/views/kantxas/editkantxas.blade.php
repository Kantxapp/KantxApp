@extends('layouts.app')
@section('title', 'Edit Kantxa')

@section('content')

<section class="mbr-section article mbr-parallax-background" id="msg-box8-3" style="background-image: url({{$kantxa[0]->KantxaPic}}); padding-top: 220px; padding-bottom: 120px;">

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(34, 34, 34);">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                <h3 class="mbr-section-title display-2 text-white">{{$kantxa[0]->name}}</h3>
                <div class="lead"></div>
                
            </div>
        </div>
    </div>

</section>
<section class="mbr-section" id="form1-1" style="background-color: rgb(153, 50, 109); padding-top: 120px; padding-bottom: 120px;">

    <div class="mbr-section mbr-section-nopadding text-white">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1" data-form-type="formoid">

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('kantxa.saveEdit') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <input type="hidden" id="name" name="name" value="{{$kantxa[0]->name}}">
                        <input type="hidden" id="id" name="id" value="{{$kantxa[0]->id}}">

                        <div class="row row-sm-offset">
                            <div class="col-xs-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-8-avatar">Foto Kantxa</label>
                                    <input id="kantxaPic" type="file" class="form-control" name="KantxaPic">
                                </div>
                            </div>
                            <div class="col-xs-4 col-md-2">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-8-name">Número</label>
                                    <input id="streetNumber" type="text" class="form-control" name="streetNumber" value="{{$kantxa[0]->streetNumber}}">
                                </div>
                            </div>
                            <div class="col-xs-8 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-8-surname1">Calle</label>
                                    <input id="route" type="text" class="form-control" name="route" value="{{$kantxa[0]->route}}">
                                </div>
                            </div>
                            <div class="col-xs-8 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-8-surname2">Municipio</label>
                                    <input id="locality" type="text" class="form-control" name="locality" value="{{$kantxa[0]->locality}}">
                                </div>
                            </div>
                            <div class="col-xs-4 col-md-2">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-8-surname2">Provincia</label>
                                    <input id="province" type="text" class="form-control" name="province" value="{{$kantxa[0]->province}}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-8-surname1">Dirección</label>
                                    <input id="formatedAddress" type="text" class="form-control" name="formatedAddress" value="{{$kantxa[0]->formatedAddress}}">
                                </div>
                            </div>
                            <div class="col-xs-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-8-surname1">Latitud</label>
                                    <input id="lat" type="text" class="form-control" name="lat" value="{{$kantxa[0]->lat}}">
                                </div>
                            </div>
                            <div class="col-xs-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-8-surname1">Longitud</label>
                                    <input id="lng" type="text" class="form-control" name="lng" value="{{$kantxa[0]->lng}}">
                                </div>
                            </div>
                            <div class="col-xs-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-8-surname1">Map ID</label>
                                    <input id="place_id" type="text" class="form-control" name="place_id" value="{{$kantxa[0]->place_id}}">
                                </div>
                            </div>
                            <div class="col-xs-6 col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-8-surname1">Sensor ID</label>
                                    <input id="sensor_id" type="text" class="form-control" name="sensor_id" value="{{$kantxa[0]->sensor_id}}">
                                </div>
                            </div>

                        <div class="col-xs-12 col-md-12"><button type="submit" class="btn btn-success col-xs-12 col-md-12">CAMBIAR</button></div>
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
    <div class="mbr-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyD4YZR4_SBmFpOKo09NnGG_BCDsR-jm6N4&amp;q=place_id:{{$kantxa[0]->place_id}}" allowfullscreen=""></iframe></div>
</section>
@endsection