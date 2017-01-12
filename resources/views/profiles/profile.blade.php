@extends('layouts.app')
@section('title', 'Perfil')
@section('head')
    <link rel="stylesheet"  href="/assets/profile-card/css/style.css" type="text/css" />
@endsection
@section('content')
@if (Auth::user()->avatar == null)
<section class="mbr-section article mbr-parallax-background mbr-after-navbar" id="msg-box8-6" style="background-image: url(https://cdn.pixabay.com/photo/2014/06/20/10/44/softball-372979_960_720.jpg); padding-top: 160px; padding-bottom: 120px;">
@else
<section class="mbr-section article mbr-parallax-background mbr-after-navbar" id="msg-box8-6" style="background-image: url({{ Auth::user()->avatar}}); padding-top: 160px; padding-bottom: 100px;">

@endif
    <div class="mbr-overlay " style="opacity: 0.5; background-color: rgb(34, 34, 34);">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                <h3 class="mbr-section-title display-2 text-white">{{ Auth::user()->name }}</h3>
                <br/>
                <br/>
                <br/>
                @if (Auth::user()->avatar == null)
                <div class="mbr-author-img"><img src="{{ Avatar::create(Auth::user()->name)->toBase64() }}" class="img-circle" style="width:150px; height:150px;"></div>
                @else
                <div class="mbr-author-img"><img src="{{ Auth::user()->avatar}}" class="img-circle" style="width:150px; height:150px;"></div>
                @endif
            </div>
        </div>
        
    </div>

</section>

<section class="mbr-section" id="form1-8" style="background-color: rgb(255, 255, 255); padding-top: 120px; padding-bottom: 120px;">

    <div class="mbr-section mbr-section-nopadding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1" data-form-type="formoid">


                    <div data-form-alert="true">
                        <div hidden="" data-form-alert-success="true" class="alert alert-form alert-success text-xs-center">Thanks for filling out form!</div>
                    </div>


                    <form action="#" method="post" data-form-title="CONTACT FORM">

                        <div class="row row-sm-offset">

                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-8-name">Nombre<span class="form-asterisk">*</span></label>
                                    <input id="name" type="text" class="form-control" name="name" value="{{ Auth::user()->profile->name}}" >
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-8-name">Apellido<span class="form-asterisk">*</span></label>
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') ?? $user->name }}" >
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-8-email">Email<span class="form-asterisk">*</span></label>
                                    <input type="email" class="form-control" name="email" required="" data-form-field="Email" id="form1-8-email">
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-8-phone">Phone</label>
                                    <input type="tel" class="form-control" name="phone" data-form-field="Phone" id="form1-8-phone">
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="form-control-label" for="form1-8-message">Message</label>
                            <textarea class="form-control" name="message" rows="7" data-form-field="Message" id="form1-8-message"></textarea>
                        </div>

                        <div><button type="submit" class="btn btn-danger">EDITAR</button></div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
