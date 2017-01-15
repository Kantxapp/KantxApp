@extends('layouts.app')

@section('content')

<section class="mbr-cards mbr-section mbr-section-nopadding" id="features7-c" style="background-color: rgb(244, 85, 32); padding-top: 130px;  padding-bottom: 100px;">

    

    <div class="mbr-cards-row row">
        <div class="mbr-cards-col col-xs-12 col-lg-3">
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img iconbox"><span class="mbri-users mbr-iconfont mbr-iconfont-features7" style="color: rgb(0, 0, 0);"></span></div>
                    <div class="card-block">
                        <h4 class="card-title">Nombre de Usuario</h4>
                        
                        <p class="card-text">{{ old('name') ?? $user->name }}</p>
                        
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
                        
                        <p class="card-text">{{ old('email') ?? $user->email }}</p>
                        
                    </div>
                </div>
          </div>
        </div>
        <div class="mbr-cards-col col-xs-12 col-lg-3" >
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img iconbox"><a href="{{ route('account.edit') }}" class="mbri-edit mbr-iconfont mbr-iconfont-features7" style="color: rgb(0, 0, 0);"></a></div>
                    <div class="card-block">
                        <h4 class="card-title">Editar</h4>

                        
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
                        
                        <p class="card-text">******</p>
                        
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
                        
                        <p class="card-text">******</p>
                        
                    </div>
                </div>
            </div>
        </div>
        
        
    </div>
    
</section>
@endsection
