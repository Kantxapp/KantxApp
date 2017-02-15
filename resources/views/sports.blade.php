@extends('layouts.sports')

@section('content')

<div class="container" style="margin-top: 90px;">
  <h1 class="text-center">¡Bienvenido a KantxApp!</h1><br/>
  <h3>Por favor, selecciona los deportes que te interesan a continuación</h3>
  <div class="row">
    @foreach($sports as $sport)
      <div class="col-md-3 col-xs-12 col-lg-3">
      <img src='{{$sport->img_path}}'><br>
      {{$sport->name}}
      </div>

    </div>
</div>
@endsection
