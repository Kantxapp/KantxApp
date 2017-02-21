@extends('layouts.app')
@section('title', 'Evento')

@section('content')
<div class="container" style="margin-top: 105px;">
    <div class="row">
        <p>Evento <strong>{{$event->name}}</strong> en <strong>{{$kantxaName->name}}</strong> el <strong>{{$event->start_at}}</strong></p>
        <img src="{{$sportPic[0]->img_path}}"/><br/>
        <strong>{{$sportPic[0]->name}}</strong><br/>
        <p>{{$event->rules}}</p>
        <p>Creado por: <a href="{{ route('profile',['slug' => $creator->slug]) }}">{{$creator->name}}</a></p>
        
        @if (session('status'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        {{ session('status') }}
                    </div>
                    <button class="btn btn-success"><a href="">Participas en este evento</a></button>
        @else
            <button class="btn btn-success"><a href="{{ route('participate',$event->id) }}">Unirse a este evento</a></button>
        @endif
    </div>
    
    <div class="row">
        <strong>Participantes:</strong><br/>
        @foreach($partakes as $partake)
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    @if ($partake->avatar == null)
                        <img src="{{ Avatar::create($partake->name)->toBase64() }}" style="width:90px; height:85px; float:left; border-radius:50%; margin-right:25px;" />
                    @else
                        <img src="{{ $partake->avatar}}" style="width:90px; height:85px; float:left; border-radius:50%; margin-right:25px;"/>
                    @endif
                    <br/><br/><br/><br/>
                    <div class="caption">
                    <h3>{{$partake->name}}</h3>
                    <p><a href="{{ route('profile',['slug' => $partake->slug]) }} " class="btn btn-primary" role="button">Ver perfil</a></p>
                </div>
                </div>
            </div>
        @endforeach
    </div>

</div>


@endsection

<div class="thumbnail">
            