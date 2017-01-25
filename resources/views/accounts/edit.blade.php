@extends('layouts.app')

@section('content')

<section class="mbr-cards mbr-section mbr-section-nopadding" id="features7-c" style="background-color: rgb(244, 85, 32); padding-top: 130px;  padding-bottom: 100px;">

    
    <form id="sendForm" class="form-horizontal" role="form" method="POST" action="{{ route('account.update') }}" >
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
    <div class="mbr-cards-row row">
        <div class="mbr-cards-col col-xs-12 col-lg-3">
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img iconbox"><span class="mbri-users mbr-iconfont mbr-iconfont-features7" style="color: rgb(0, 0, 0);"></span></div>
                    <div class="card-block">
                        <h4 class="card-title">Nombre de Usuario</h4>
                        
                        <p class="card-text"><input id="name" type="text" class="form-control" name="name" value="{{ old('name') ?? $user->name }}" required autofocus></p>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="mbr-cards-col col-xs-12 col-lg-3">
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img iconbox"><span class="etl-icon icon-envelope mbr-iconfont mbr-iconfont-features7" style="color: rgb(0, 0, 0);"></a></div>
                    <div class="card-block">
                        <h4 class="card-title">Dirección de Correo Electrónico</h4>
                        
                        <p class="card-text"><input id="email" type="email" class="form-control" name="email" value="{{ old('email') ?? $user->email }}" required></p>
                        
                    </div>
                </div>
          </div>
        </div>

        <div class="mbr-cards-col col-xs-12 col-lg-3" >
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img iconbox"><a id="sendLink" class="mbri-refresh mbr-iconfont mbr-iconfont-features7" style="color: rgb(0, 0, 0);"></a></div>
                    <div class="card-block">
                        <h4 class="card-title"><button type="submit" class="btn btn-primary" style="background-color: #1E4477;">Actualizar</button></h4>

                        
                    </div>
                </div>
          </div>
        </div>
        <div class="mbr-cards-col col-xs-12 col-lg-3" >
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img iconbox"><span class="mbri-key mbr-iconfont mbr-iconfont-features7" style="color: rgb(0, 0, 0);"></span></div>
                    <div class="card-block">
                        <h4 class="card-title">Contraseña</h4>
                        
                        <p class="card-text"><input id="password" type="password" class="form-control" name="password" required></p>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="mbr-cards-col col-xs-12 col-lg-3" >
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img iconbox"><span class="mbri-protect mbr-iconfont mbr-iconfont-features7" style="color: rgb(0, 0, 0);"></span></div>
                    <div class="card-block">
                        <h4 class="card-title">Confirmar la Contraseña</h4>
                        
                        <p class="card-text"><input id="password-confirm" type="password" class="form-control" name="password_confirmation" required></p>
                        
                    </div>
                </div>
            </div>
        </div>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
    </div>
    </form>
</section>
@endsection
