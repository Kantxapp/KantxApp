@extends('layouts.app')

@section('content')

<section class="mbr-section mbr-parallax-background" id="testimonials2-0" style="background-image: url(/assets/images/notifications.jpg); padding-top: 100px; padding-bottom: 420px;">

    

        <div class="mbr-section mbr-section__container mbr-section__container--middle">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-xs-center">
                        <h3 class="mbr-section-title display-2 text-white">NOTIFICACIONES</h3>
                        
                    </div>
                </div>
            </div>
        </div>


    <div class="mbr-section mbr-section-nopadding">
        <div class="container">
            <div class="row">

                <div class="col-xs-12">
                    @foreach($nots as $not)
                    <div class="mbr-testimonial card mbr-testimonial-sm">
                        <div class="card-block"><p>{{ $not->data['name'] }} &nbsp; {{ $not->data['message'] }} <span class="pull-right">{{ $not->created_at->diffForHumans() }}</span> </p></div>
                        <div class="mbr-author card-footer">
                            <a href="{{ route('profile',['slug' => $not->data['slug'] ]) }}" style="text-decoration: none;">
                            <div class="mbr-author-img">
                                @if ($not->data['avatar'] == null)
                                    <img src="{{ Avatar::create($not->data['name'])->toBase64() }}" class="img-circle">
                                @else
                                    <img src="{{ $not->data['avatar']}}" class="img-circle">
                                @endif
                                
                            <div class="mbr-author-name text-white">{{ $not->data['name'] }}</div>
                            
                        </div>
                    </div>
                    </a>

                </div>
                @endforeach

            </div>

        </div>
    </div>
</section>
@endsection