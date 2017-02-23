@extends('layouts.app')

@section('content')
<section class="mbr-section mbr-section-hero mbr-section-full mbr-parallax-background mbr-section-with-arrow" id="header1-4" style="background-image: url(/assets/images/requestkantxa.jpg);">

    <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(0, 0, 0);"></div>

    <div class="mbr-table-cell">

        <div class="container">
            <div class="row">
                <div class="mbr-section col-md-10 col-md-offset-1 text-xs-center">

                    <h1 class="mbr-section-title display-1">SOLICITAR KANTXA</h1>
                    <p class="mbr-section-lead lead">
                        <div class="mbr-section mbr-section-nopadding">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-lg-10 col-lg-offset-1" data-form-type="formoid">
                                        
                                        <form id="formkantxasend" class="mbr-form"action="{{ route('kantxa.requestsend') }}" method="post">
                                            {{ csrf_field() }}
                                            
                                            <div class="mbr-subscribe mbr-subscribe-dark input-group col-lg-12 col-xs-12">
                                                <div class="form-group">
                                                <input type="text" class="form-control" name="name" required="" data-form-field="Name" id="form1-f-name" placeholder="Introduce el nombre de la Kantxa..." >
                                                </div>
                                                </div>
                                                <div class="mbr-subscribe mbr-subscribe-dark input-group col-lg-12 col-xs-12" style="margin-top:20px;">
                                                <div class="form-group">
                                                <input type="text" class="form-control" name="address" required="" data-form-field="Address" id="form1-f-address" placeholder="Introduce la direccion de la Kantxa..." >
                                                </div>
                                                </div>
                                                <div class="mbr-subscribe mbr-subscribe-dark input-group col-lg-12 col-xs-12" style="margin-top:20px;">
                                                <div class="form-group">
                                                <input type="text" class="form-control" name="sports" required="" data-form-field="Sports" id="form1-f-sports" placeholder="Qué deportes se practican?" >
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </p>
                    <div class="mbr-section-btn" id="formkantxa"> <a class="btn btn-lg btn-white btn-white-outline">SOLICITAR</a></div>
                </div>
            </div>
        </div>
    </div>

    <div class="mbr-arrow mbr-arrow-floating" aria-hidden="true"><a href="#form2-5"><i class="mbr-arrow-icon"></i></a></div>

</section>
@endsection