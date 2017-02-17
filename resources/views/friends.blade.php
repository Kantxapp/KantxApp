@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 105px;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 text-xs-center">
        @foreach($my_friends as $friend)
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            @if ($friend->avatar == null)
                <img src="{{ Avatar::create($friend->name)->toBase64() }}" style="width:90px; height:85px; float:left; border-radius:50%; margin-right:25px;" />
            @else
                <img src="{{ $friend->avatar}}" style="width:90px; height:85px; float:left; border-radius:50%; margin-right:25px;"/>
            @endif
            <br/><br/><br/><br/>
            <div class="caption">
                <h3>{{$friend->name}}</h3>
                <p><a href="{{ route('profile',['slug' => $friend->slug]) }}" class="btn btn-primary" role="button">Ver perfil</a></p>
            </div>
        </div>
</div>
@endforeach
        </div>

</div>
</div>

@endsection