@extends('layouts.land')

@section('title', 'KantxApp')

@section('content')
<section class="engine"><a rel="external" href="https://mobirise.com">mobile site builder</a></section><section class="mbr-section mbr-section-hero mbr-section-full mbr-section-with-arrow mbr-after-navbar" id="header4-0" data-bg-video="https://www.youtube.com/embed/X914l3IPFAg?rel=0&amp;amp;showinfo=0&amp;autoplay=0&amp;loop=0">

    <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(0, 0, 0);"></div>

    <div class="mbr-table-cell">

        <div class="container">
            <div class="row">
                <div class="mbr-section col-md-10 col-md-offset-1 text-xs-center">
                <!--<div class="mbr-section col-md-10 col-md-offset-2 text-xs-right">-->

                    <h1 class="mbr-section-title display-1">KANTXAPP</h1>
                    <p class="mbr-section-lead lead">@lang('landingPage.landing_welcome_text')</p>
                    <div class="mbr-section-btn"><a class="btn btn-lg btn-warning" href="{{ url('/register') }}">@lang('landingPage.landing_register_btn')</a>  </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mbr-arrow mbr-arrow-floating" aria-hidden="true"><a href="#features6-8"><i class="mbr-arrow-icon"></i></a></div>

</section>

<section class="mbr-cards mbr-section mbr-section-nopadding" id="features6-8" style="background-color: rgb(163, 143, 132);">

    

    <div class="mbr-cards-row row">
        <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 80px; padding-bottom: 80px;">
            <div class="container">
              <div class="card cart-block">
                  <div class="card-img"><span class="mbri-edit mbr-iconfont mbr-iconfont-features3"></span></div>
                  <div class="card-block">
                    <h4 class="card-title">@lang('landingPage.landing_feat_org')</h4>
                    
                    <p class="card-text">@lang('landingPage.landing_feat_org_text')&nbsp;<br></p>
                    
                    </div>
                </div>
            </div>
        </div>
        <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 80px; padding-bottom: 80px;">
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img"><span class="mbri-users mbr-iconfont mbr-iconfont-features3"></span></div>
                    <div class="card-block">
                        <h4 class="card-title">@lang('landingPage.landing_feat_soc')</h4>
                        
                        <p class="card-text">@lang('landingPage.landing_feat_soc_text')</p>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 80px; padding-bottom: 80px;">
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img"><span class="etl-icon icon-lightbulb mbr-iconfont mbr-iconfont-features3"></span></div>
                    <div class="card-block">
                        <h4 class="card-title">@lang('landingPage.landing_feat_kan')</h4>
                        
                        <p class="card-text">@lang('landingPage.landing_feat_kan_text')</p>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 80px; padding-bottom: 80px;">
            <div class="container">
                <div class="card cart-block">
                    <div class="card-img"><span class="etl-icon icon-map-pin mbr-iconfont mbr-iconfont-features3"></span></div>
                    <div class="card-block">
                        <h4 class="card-title">@lang('landingPage.landing_feat_loc')</h4>
                        
                        <p class="card-text">@lang('landingPage.landing_feat_loc_text')</p>
                        
                    </div>
                </div>
            </div>
        </div>
        
        
    </div>
</section>

<section class="mbr-section" id="testimonials1-e" style="background-color: rgb(255, 255, 255); padding-top: 120px; padding-bottom: 120px;">

    

        <div class="mbr-section mbr-section__container mbr-section__container--middle">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-xs-center">
                        <h3 class="mbr-section-title display-2">@lang('landingPage.landing_user_header')</h3>
                        <small class="mbr-section-subtitle">@lang('landingPage.landing_user_caption')</small>
                    </div>
                </div>
            </div>
        </div>


    <div class="mbr-testimonials mbr-section mbr-section-nopadding">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-lg-4">

                    <div class="mbr-testimonial card mbr-testimonial-lg">
                        <div class="card-block"><p>@lang('landingPage.landing_user1_feedback')</p></div>
                        <div class="mbr-author card-footer">
                            <div class="mbr-author-img"><img src="assets/images/face3.jpg" class="img-circle"></div>
                            <div class="mbr-author-name">Abanoub S.</div>
                            <small class="mbr-author-desc">@lang('landingPage.landing_user_word')</small>
                        </div>
                    </div>
                </div><div class="col-xs-12 col-lg-4">

                    <div class="mbr-testimonial card mbr-testimonial-lg">
                        <div class="card-block"><p>@lang('landingPage.landing_user2_feedback')</p></div>
                        <div class="mbr-author card-footer">
                            <div class="mbr-author-img"><img src="assets/images/face1.jpg" class="img-circle"></div>
                            <div class="mbr-author-name">Suffian A.</div>
                            <small class="mbr-author-desc">@lang('landingPage.landing_user_word')</small>
                        </div>
                    </div>
                </div><div class="col-xs-12 col-lg-4">

                    <div class="mbr-testimonial card mbr-testimonial-lg">
                        <div class="card-block"><p>@lang('landingPage.landing_user3_feedback')</p></div>
                        <div class="mbr-author card-footer">
                            <div class="mbr-author-img"><img src="assets/images/face2.jpg" class="img-circle"></div>
                            <div class="mbr-author-name">Jhollman C.</div>
                            <small class="mbr-author-desc">@lang('landingPage.landing_user_word')</small>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</section>

<section class="mbr-section" id="form1-f" style="background-color: rgb(235, 107, 86); padding-top: 120px; padding-bottom: 120px;">
    
    <div class="mbr-section mbr-section__container mbr-section__container--middle">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-center">
                    <h3 class="mbr-section-title display-2">@lang('landingPage.landing_form_header')</h3>
                    <small class="mbr-section-subtitle">@lang('landingPage.landing_form_caption')</small>
                </div>
            </div>
        </div>
    </div>
     @if (session('status'))
        <div class="alert alert-success text-xs-center alert-dismissible fade in" role="alert">
            
            <button type="button" class="close " data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            {{ session('status') }}
        </div>
    @endif
    <div class="mbr-section mbr-section-nopadding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1" data-form-type="formoid">


                    


                    <form action="/contacto" method="post">
                        {{ csrf_field() }}
                        

                        <div class="row row-sm-offset">

                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-f-name">@lang('landingPage.landing_form_name')<span class="form-asterisk">*</span></label>
                                    <input type="text" class="form-control" name="name" required="" data-form-field="Name" id="form1-f-name">
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-f-email">@lang('landingPage.landing_form_mail')<span class="form-asterisk">*</span></label>
                                    <input type="email" class="form-control" name="email" required="" data-form-field="Email" id="form1-f-email">
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="form1-f-phone">@lang('landingPage.landing_form_phone')</label>
                                    <input type="tel" class="form-control" name="phone" data-form-field="Phone" id="form1-f-phone">
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="form-control-label" for="form1-f-message">@lang('landingPage.landing_form_text')</label>
                            <textarea class="form-control" name="message" rows="7" data-form-field="Message" id="form1-f-message"></textarea>
                        </div>

                        <div><button type="submit" class="btn btn-warning">@lang('landingPage.landing_form_submit')</button></div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section-md-padding" id="social-buttons1-k" style="background-color: rgb(250, 175, 64); padding-top: 90px; padding-bottom: 90px;">
    
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                <h3 class="mbr-section-title display-2">@lang('landingPage.landing_share')</h3>
                <div>

                  <div class="mbr-social-likes" data-counters="false">
                    <span class="btn btn-social facebook" title="Share link on Facebook">
                        <i class="socicon socicon-facebook"></i>
                    </span>
                    <span class="btn btn-social twitter" title="Share link on Twitter">
                        <i class="socicon socicon-twitter"></i>
                    </span>
                    <span class="btn btn-social plusone" title="Share link on Google+">
                        <i class="socicon socicon-google"></i>
                    </span>
                    
                    
                  </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection