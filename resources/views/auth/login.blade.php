@extends('layouts.land')

@section('content')



@section('body','style="background-color: rgb(46, 46, 46);')
<section class="mbr-section mbr-section-md-padding mbr-after-navbar" id="social-buttons1-2" style="background-color: rgb(0, 168, 133); padding-top: 120px; padding-bottom: 0px;">
    
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                <h3 class="mbr-section-title display-2">ENTRA CON TU CUENTA SOCIAL PREFERIDA!</h3>
                <div>

                  <div class="mbr-social-likes" data-counters="false">
                    <a href="{{ url('/redirect/facebook') }}">
                    <span class="btn btn-social" title="login with Facebook">
                        <i class="socicon socicon-facebook"></i>
                    </span>
                    </a>
                    <a href="{{ url('/redirect/twitter') }}">
                    <span class="btn btn-social" title="login with Twitter" >
                        <i class="socicon socicon-twitter"></i>
                    </span>
                    </a>
                    
                    
                    
                  </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section" id="form1-3" style="background-color: rgb(0, 168, 133); padding-top: 0px; padding-bottom: 80px;">
    
    <div class="mbr-section mbr-section__container mbr-section__container--middle">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-center">
                    <h3 class="mbr-section-title display-2"></h3>
                    <small class="mbr-section-subtitle"></small>
                </div>
            </div>
        </div>
    </div>
    <div class="mbr-section mbr-section-nopadding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1" data-form-type="formoid">


                @if (session('status'))-->
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                @if (session('warning'))
                    <div class="alert alert-warning">
                        {{ session('warning') }}
                    </div>
                @endif


                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">

                        {{ csrf_field() }}

                        <div class="row row-sm-offset">

                            

                            <div class="col-xs-12 col-md-6">
                                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label class="form-control-label" for="form1-3-email">Email<span class="form-asterisk">*</span></label>
                                    <input type="email" class="form-control" name="email" required="" data-form-field="Email" id="form1-3-email" value="{{ old('email') }}" required autofocus>
                                     @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-6">
                                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label class="form-control-label" for="form1-3-password">Contraseña<span class="form-asterisk">*</span></label>
                                    <input type="password" class="form-control" name="password" data-form-field="Password" id="form1-3-password" required>
                                     @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                        <div class="form-group">
                            <div class="col-xs-12 col-md-6">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Recuérdame
                                    </label>
                                </div>
                            </div>
                        </div>
                               

                        </div>


                        <div>
                            <button type="submit" class="btn btn-danger"><span class="mbri-play mbr-iconfont mbr-iconfont-btn"></span>ENTRAR</button>
                            <a class="white" href="{{ url('/password/reset') }}">  ¿Has olvidado la contraseña?</a>
                        
                        </div>
                        

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
