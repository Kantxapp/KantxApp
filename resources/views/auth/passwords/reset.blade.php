@extends('layouts.land')

@section('title', 'Confirmación Reiniciar ')
@section('kantxcolor','style="color: #fff;')
@section('body','style="background-color: rgb(46, 46, 46);')

@section('content')


<section class="mbr-section article mbr-parallax-background mbr-after-navbar" id="msg-box3-4" style="background-image: url(/assets/images/reset_photo2.jpg); padding-top: 200px; padding-bottom: 200px; margin-top:200px;">

    
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                @endif
                <h3 class="mbr-section-title display-2">Escribe los nuevos datos</h3>
                <div class="lead">
                    <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1" data-form-type="formoid">
                    
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="mbr-subscribe  input-group col-xs-12 col-lg-10 col-lg-offset-1" style="margin-top:20px;">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" data-form-field="Email" placeholder="Email" required autofocus >
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="mbr-subscribe  input-group col-xs-12 col-lg-5 col-lg-offset-1" style="margin-top:20px; margin-right:5px; ">
                               <input id="password" type="password" class="form-control" name="password" data-form-field="Password" placeholder="Nueva Contraseña" required>
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <div class="mbr-subscribe  input-group col-xs-12 col-lg-5" style="margin-top:20px; ">
                               <input id="password-confirm" type="password" class="form-control" name="password_confirmation" data-form-field="Password_Confirmation" placeholder="Confirmación Contraseña" required>

                            </div>
                        </div>
                        @if (count($errors) > 0)
                        <div class="form-group">
                            <div class="input-group col-xs-12 col-lg-10 col-lg-offset-1" style="margin-top:20px;">
                            <div class="alert alert-danger alert-dismissible fade in" role="alert">
                                <button type="button" class="close " data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            </div>
                        </div>
                        @endif

                        <div class="row">
                        <div class="form-group">
                            <div class="input-group col-xs-12 col-lg-10 col-lg-offset-1" style="margin-top:20px;">
                              <button type="submit" class="btn btn-danger"><span class="mbri-protect mbr-iconfont mbr-iconfont-btn"></span>CONFIRMAR NUEVA CONTRASEÑA</button>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection
