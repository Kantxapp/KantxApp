@extends('layouts.sports')


@section('content')

<div class="container" style="margin-top: 90px;">
  <h1 class="text-center">¡Bienvenido a KantxApp!</h1><br/>
  <h3>Por favor, selecciona los deportes que te interesan a continuación</h3>
  <div class="row">
    @foreach($sports as $sport)
      <div id="userId={{$user_id}}_sportId={{$sport->id}}" class="col-md-3 col-xs-3 col-lg-3 sport">
      <img src='{{$sport->img_path}}'><br>
      {{$sport->name}}
      </div>
    @endforeach
    </div>
</div>
@endsection

@section('script')
  <script src="/js/sports.js"></script>
@endsection