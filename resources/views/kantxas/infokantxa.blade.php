@extends('layouts.app')
@section('title', $kantxa->name)
@section('head')
    <link rel="stylesheet" type="text/css" href="http://csshake.surge.sh/csshake.min.css">
@endsection
@section('content')


<section class="mbr-section article mbr-parallax-background" id="msg-box8-3" style="background-image: url('{{$kantxa->KantxaPic}}'); padding-top: 220px; padding-bottom: 120px;">
    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(34, 34, 34);">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                <h3 class="mbr-section-title display-2 text-white" style="padding-bottom: 20px;">{{$kantxa->name}}</h3>
                <div><a href='{{ url("/create/event/$kantxa->id") }}' ><button type="button" class="btn btn-danger greenery shake-slow shake-constant--hover">Crear evento en esta Kantxa</button></a></div>
                
                @if (session('status'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        {{ session('status') }}
                    </div>
                @endif
                <div class="lead"></div>
                
            </div>
        </div>
    </div>

</section>

<section class="mbr-section mbr-section-md-padding mbr-footer footer2" id="contacts2-4" style="background-color: rgb(46, 46, 46); padding-top: 90px; padding-bottom: 90px;">

    <div class="container">
        <div class="row">

            <div class="mbr-company col-xs-12 col-md-6 col-lg-6 col-md-6">

                <div class="mbr-company card">
                    <div>
                        <h4>En esta Kantxa se practican estos deportes:</h4>
                        @foreach($sports as $sport)
                            <img src="{{$sport->img_path}}">
                        @endforeach
                    </div>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <span class="list-group-icon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                            <span class="list-group-text">{{$num_events}} Eventos programados</span>
                        </li>
                        <li class="list-group-item">
                            <span class="list-group-icon"><span class="etl-icon icon-map-pin mbr-iconfont-company-contacts3"></span></span>
                            <span class="list-group-text">{{$kantxa->formatedAddress}}</span>
                        </li>
                        @if(isset($sensor))
                        <li class="list-group-item">
                            <span class="list-group-icon"><i class="fa fa-users" aria-hidden="true"></i></span>
                            <span class="list-group-text">La Kantxa esta<span id="{{$sensor->id}}_ocupado">@if($sensor->ocupado) ocupada @else libre @endif</span> </span>
                        </li>
                        <li class="list-group-item">
                            <span class="list-group-icon"><i class="fa fa-sun-o" aria-hidden="true"></i></span>
                            <span class="list-group-text">La Radiación Solar es de <span id="{{$sensor->id}}_radiacion">{{$sensor->radiacion}}</span> </span>
                        </li>
                        <li class="list-group-item">
                            <span class="list-group-icon"><i class="fa fa-tint" aria-hidden="true"></i></span>
                            <span class="list-group-text">La Humedad es de <span id="{{$sensor->id}}_humedad">{{$sensor->humedad}}</span> </span>
                        </li>
                        <li class="list-group-item">
                            <span class="list-group-icon"><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
                            <span class="list-group-text">El viento es de <span id="{{$sensor->id}}_viento">{{$sensor->viento}}</span> </span>
                        </li>
                        <li class="list-group-item">
                            <span class="list-group-icon"><i class="fa fa-thermometer-half" aria-hidden="true"></i></span>
                            <span class="list-group-text">La Temperatura es de <span id="{{$sensor->id}}_temperatura">{{$sensor->temperatura}}</span> </span>
                        </li>
                        <li class="list-group-item">
                            <span class="list-group-icon"><i class="fa fa-shower" aria-hidden="true"></i></span>
                            <span class="list-group-text">La Lluvia es de <span id="{{$sensor->id}}_llover">{{$sensor->llover}}</span> </span>
                        </li>
                        @endif
                    </ul>

                </div>
                </div>

            <div class="col-xs-12 col-md-6">
                <div class="mbr-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyD4YZR4_SBmFpOKo09NnGG_BCDsR-jm6N4&amp;q=place_id:{{$kantxa->place_id}}" allowfullscreen=""></iframe></div>
            </div>
            

        </div>
                    <h3>Eventos en esta kantxa:</h3>
                    @foreach($events as $event)
                        
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="thumbnail">
                            @foreach($sports as $sport)
                            @if ($sport->id == $event->sport_id)
                            <img src="{{$sport->img_path}}" alt="...">
                            @endif
                            @endforeach 
                            <div class="caption">
                                <h3>{{$event->name}}</h3>
                                <p>{{$event->rules}}</p>
                                <div><a href='{{ route('event.get',$event->id) }}' ><button type="button" class="btn btn-succes greenery ">Ver evento</button></a></div>
                                
                            </div>
                        </div>
                    </div>

                    @endforeach
    </div>
</section>
@endsection

