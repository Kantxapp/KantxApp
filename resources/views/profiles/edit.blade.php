@extends('layouts.app')
@section('title', 'Perfil')
@section('head')
    <link rel="stylesheet"  href="/assets/profile-card/css/style.css" type="text/css" />
@endsection
@section('content')
@if (Auth::user()->avatar == null)
<section class="mbr-section article mbr-parallax-background mbr-after-navbar" id="msg-box8-6" style="background-image: url(https://cdn.pixabay.com/photo/2014/10/14/20/24/the-ball-488714_960_720.jpg); padding-top: 160px; padding-bottom: 80px;">
@else
<section class="mbr-section article mbr-parallax-background mbr-after-navbar" id="msg-box8-6" style="background-image: url({{ Auth::user()->avatar}}); padding-top: 160px; padding-bottom: 60px;">

@endif
    <div class="mbr-overlay " style="opacity: 0.5; background-color: rgb(34, 34, 34);">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                <h3 class="mbr-section-title display-2 text-white">{{ Auth::user()->name }}</h3>
                <br/>
                <br/>
                
                @if (Auth::user()->avatar == null)
                <div class="mbr-author-img"><img src="{{ Avatar::create(Auth::user()->name)->toBase64() }}" class="img-circle" style="width:150px; height:150px;"></div>
                @else
                <div class="mbr-author-img"><img src="{{ Auth::user()->avatar}}" class="img-circle" style="width:150px; height:150px;"></div>
                @endif
                <br/>

            </div>
        </div>
        
    </div>

</section>

<section class="mbr-section" id="form1-8" style="background-color: rgb(255, 255, 255); padding-top: 120px; padding-bottom: 120px;">

    <div class="mbr-section mbr-section-nopadding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1" data-form-type="formoid">

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}

                        <div class="row row-sm-offset">
                            <div class="col-xs-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-8-avatar">Cambiar Avatar</label>
                                    <input id="avatar" type="file" class="form-control" name="avatar">
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-8-name">Nombre<span class="form-asterisk">*</span></label>
                                    <input id="name" type="text" class="form-control" name="name" value="{{ Auth::user()->profile->name}}" required >
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-8-surname1">Apellido1<span class="form-asterisk">*</span></label>
                                    <input id="surname1" type="text" class="form-control" name="surname1" value="{{ Auth::user()->profile->surname1}}" required>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-8-surname2">Apellido2<span class="form-asterisk">*</span></label>
                                    <input id="surname2" type="text" class="form-control" name="surname2" value="{{ Auth::user()->profile->surname2}}" required>
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-8-phone">Móvil</label>
                                    <input type="tel" class="form-control" name="phone" data-form-field="Phone" id="form1-8-phone" value="{{ Auth::user()->profile->phone}}">
                                </div>
                            </div>
                        </div>
                        <div class="row row-sm-offset">
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-8-province">Provincia<span class="form-asterisk">*</span></label>
                                    <input id="province" type="text" class="form-control" name="province" value="{{ Auth::user()->profile->province}}" required >
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-8-city">Localidad<span class="form-asterisk">*</span></label>
                                    <input id="city" type="text" class="form-control" name="city" value="{{ Auth::user()->profile->city}}"  required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-control-label" for="form1-8-message">Sobre Mí</label>
                            <textarea class="form-control" name="about" rows="7" data-form-field="About" id="form1-8-message" >{{ Auth::user()->profile->about}}</textarea>
                        </div>
                        <div class="col-xs-12 col-md-12"><button type="submit" class="btn btn-success col-xs-12 col-md-12">GUARDAR</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
