@extends('layouts.app')

@section('content')

<section class="mbr-cards mbr-section mbr-section-nopadding" id="features7-2" style="margin-top: 50px;">

    

    <div class="mbr-cards-row row">
        @foreach($my_friends as $friend)
        <div class="mbr-cards-col col-xs-12 col-lg-3 col-md-3" style="padding-top: 80px; padding-bottom: 80px;">
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img iconbox">
                        @if ($friend->avatar == null)
                            <img src="{{ Avatar::create($friend->name)->toBase64() }}"/>
                        @else
                            <img src="{{ $friend->avatar}}" style="border-radius:50%;"/>
                        @endif
                    </div>
                    <div class="card-block">
                        <h4 class="card-title">{{$friend->name}}</h4>
                        
                        <p class="card-text"><a href="{{ route('profile',['slug' => $friend->slug]) }}" class="btn greenery" style="color: white;" role="button">Ver perfil</a></p>
                        
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection
