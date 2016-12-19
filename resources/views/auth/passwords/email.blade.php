@extends('layouts.land')

@section('title', 'Reiniciar')

@section('body','style="background-color: rgb(46, 46, 46);')
@section('content')

<section class="mbr-section mbr-after-navbar" id="msg-box5-1" style="background-color: rgb(194, 53, 39); padding-top: 240px; padding-bottom: 160px;">

    
    <div class="container">
        <div class="row">
            @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
            <div class="mbr-table-md-up">
                
              <div class="mbr-table-cell mbr-right-padding-md-up mbr-valign-top col-md-7  image-size" style="width: 50%;">
                  <div class="mbr-figure"><img src="/assets/images/reset_photo.jpg"></div>
              </div>

              


              <div class="mbr-table-cell col-md-5 text-xs-center text-md-left content-size">
                    
                  <h3 class="mbr-section-title display-2">SI HAS OLVIDADO TU CONTRASEÑA</h3>
                  <div class="lead">

                    <p>Se enviará un enlace de cambio a tu correo electrónico.</p>

                  </div>
                  <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                        {{ csrf_field() }}
                    <div class="mbr-subscribe mbr-subscribe-dark input-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required data-form-field="Email" placeholder="Dirección de Correo Electronico..." id="form2-3-email">
                            <span class="input-group-btn"><button type="submit" class="btn btn-white"><span class="mbri-paper-plane mbr-iconfont mbr-iconfont-btn"></span>ENVIAR ENLACE</button></span>
                        </div>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
              </div>


              <!--<form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">-->
              <!--          {{ csrf_field() }}-->

              <!--          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">-->
              <!--              <label for="email" class="col-md-4 control-label">E-Mail Address</label>-->

              <!--              <div class="col-md-6">-->
              <!--                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>-->

              <!--                  @if ($errors->has('email'))-->
              <!--                      <span class="help-block">-->
              <!--                          <strong>{{ $errors->first('email') }}</strong>-->
              <!--                      </span>-->
              <!--                  @endif-->
              <!--              </div>-->
              <!--          </div>-->

            </div>
        </div>
    </div>

</section>

@endsection
