@extends('layouts.sports')


@section('content')

    <div class="container" style="margin-top: 90px;">
      
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
              <!--<div class="container" style="margin-top: 90px;">-->
                <h1 class="text-center">{{ Auth::user()->name }} ,¡Bienvenido a KantxApp!</h1><br/>
                <h3>Por favor, selecciona los deportes que te interesan a continuación</h3>
                <div class="row">
                    @foreach($sports as $sport)
                        <div id="userId_{{Auth::user()->id}}_sportId_{{$sport->id}}" class="col-md-3 col-xs-3 col-lg-3 sport">
                        <img src='{{$sport->img_path}}'><br>
                        {{$sport->name}}
                        </div>
                    @endforeach
                  </div>
              <!--</div>-->
                <div style="margin-top: 10px;"><a class="btn btn-secondary greenery" href="{{ url('/home') }}">CONTINUAR</a></div>
            </div>
        </div>
    </div>
@endsection

@section('script')
  <script src="/js/sports.js"></script>
@endsection