@extends('layouts.land')

@section('title', 'Registrar')
@section('kantxcolor','style="color: #fff;')
@section('body','style="background-color: rgb(46, 46, 46);')
@section('content')






<section class="mbr-section mbr-after-navbar" id="form2-5" style="background-color: rgb(46, 46, 46); padding-top: 120px; padding-bottom: 120px;">
        <div class="mbr-section mbr-section__container mbr-section__container--middle">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-center">
                    <h3 class="mbr-section-title display-2 white">@lang('registerPage.register_create_account')</h3>
                    <form action="/login">
                    <span class="input-group-btn" ><button type="submit" class="btn btn-info" href="{{ url('/login') }}">@lang('registerPage.register_use_social_account')</button></span>
                    </form>    
                </div>
            </div>
        </div>
    </div>
    <div class="mbr-section mbr-section-nopadding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1" data-form-type="formoid">
                    
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}
                        
                        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="mbr-subscribe mbr-subscribe-dark input-group col-xs-12 col-lg-10 col-lg-offset-1">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" data-form-field="Name" placeholder=@lang('registerPage.register_form_name') required autofocus>
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="mbr-subscribe mbr-subscribe-dark input-group col-xs-12 col-lg-10 col-lg-offset-1" style="margin-top:20px;">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" data-form-field="Email" placeholder=@lang('registerPage.register_form_mail') required>
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="mbr-subscribe mbr-subscribe-dark input-group col-xs-12 col-lg-5 col-lg-offset-1" style="margin-top:20px; margin-right:5px; ">
                               <input id="password" type="password" class="form-control" name="password" data-form-field="Password" placeholder=@lang('registerPage.register_form_pass') required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="mbr-subscribe mbr-subscribe-dark input-group col-xs-12 col-lg-5" style="margin-top:20px; ">
                               <input id="password-confirm" type="password" class="form-control" name="password_confirmation" data-form-field="Password_Confirmation" placeholder="@lang('registerPage.register_form_pass_conf')" required>

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
                              <button type="submit" class="btn btn-info"><span class="mbri-edit mbr-iconfont mbr-iconfont-btn"></span>@lang('registerPage.register_form_submit')</button>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

