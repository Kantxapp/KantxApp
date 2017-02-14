@extends('layouts.app')
@section('title', 'Get Kantxas')

@section('content')
<section class="mbr-cards mbr-section mbr-section-nopadding" id="features3-0" style="background-color: rgb(250, 175, 64);">

    

    <div class="mbr-cards-row row">
@if (Auth::user()->type == 'A')

    <div class="card-btn col-lg-12"><a href="{{ route('kantxa.find')}}"  class="btn btn-danger">CREAR KANTXA</a></div>

@endif
@foreach ($kantxas as $kantxa)
    
   

        <div class="mbr-cards-col col-xs-3 col-lg-2" style="padding-top: 100px; padding-bottom: 80px;">
            <div class="container">
              <div class="card cart-block">
                  <div class="card-img"><img src="{{$kantxa->KantxaPic}}" class="card-img-top" style="width: 150px; height: 100px;"></div>
                  <div class="card-block">
                    <h4 class="card-title">{{$kantxa->name}}</h4>
                    <h5 class="card-subtitle"><i class="fa fa-map-marker" aria-hidden="true"></i>{{$kantxa->formatedAddress}}</h5>
                    @foreach ($sensors as $sensor)
                    @if ( $kantxa->sensor_id == $sensor->id)
                    <h5 class="card-subtitle">

                        <span class="list-group-icon"><i class="fa fa-sun-o" aria-hidden="true"></i></span>
                        <span class="list-group-text">{{$sensor->radiacion}}</span>
                        <span class="list-group-icon"><i class="fa fa-tint" aria-hidden="true"></i></span>
                        <span class="list-group-text">{{$sensor->humedad}}</span>
                    </h5>
                    @endif
                    @endforeach
                    @if (Auth::user()->type == 'A')
                    <div class="card-btn"><a href="{{ route('kantxa.edit',['id' => $kantxa->id]) }}"  class="btn btn-danger">EDITAR</a></div>
                    @endif
                    <div class="card-btn"><a href="{{ route('kantxa.info',['id' => $kantxa->id]) }}" class="btn btn-success">ENTRAR</a></div>
                    </div>
                </div>
            </div>
        </div>

@endforeach
    </div>
</section>
@endsection