@extends('layouts.app')
@section('title', 'Crear Evento')
@section('head')
        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">

	<link rel="stylesheet" href="/assets/bootzard/css/form-elements.css">
        <link rel="stylesheet" href="/assets/bootzard/css/style.css">

@endsection
@section('content')



        <!-- Top content -->
        <div class="top-content">
            <div class="container">

                
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box" style="margin-top: 20px;">
                    	<form role="form" action="" method="post" class="f1">

                    		<h3>CREAR EVENTO</h3>
                    		<p>Rellena los campos y activate</p>
                    		<div class="f1-steps">
                    			<div class="f1-progress">
                    			    <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="4" style="width: 16.66%;"></div>
                    			</div>
                    			<div class="f1-step active">
                    				<div class="f1-step-icon"><i class="fa fa-user"></i></div>
                    				<p>Nombre y deporte</p>
                    			</div>
                    			<div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-key"></i></div>
                    				<p>account</p>
                    			</div>
                    		    <div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-twitter"></i></div>
                    				<p>social</p>
                    			</div>


                    		</div>
                    		
                    		<fieldset>
                    		    <h4>Paso 1: Nombre y deporte</h4>
                    		<div class="form-group">
                    	            <label class="sr-only" for="f1-event-name">Nombre del Evento</label>
                                    <input type="text" id="f1-event-name" name="f1-event-name" placeholder="Nombre del Evento..." class="f1-first-name form-control" id="f1-first-name">
                                </div>
                                
                                <div class="form-group">
                    	            <label class="sr-only" for="f1-event-sport">Seleccione el Deporte</label>
                                        <select class="form-control" id="f1-event-sport">

                                        </select>
                                </div>
                                
                                
                                
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-next">Next</button>
                                </div>
                            </fieldset>

                            <fieldset>
                                <h4>Set up your account:</h4>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-email">Email</label>
                                    <input type="text" name="f1-email" placeholder="Email..." class="f1-email form-control" id="f1-email">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-password">Password</label>
                                    <input type="password" name="f1-password" placeholder="Password..." class="f1-password form-control" id="f1-password">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-repeat-password">Repeat password</label>
                                    <input type="password" name="f1-repeat-password" placeholder="Repeat password..." 
                                                        class="f1-repeat-password form-control" id="f1-repeat-password">
                                </div>
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="button" class="btn btn-next">Next</button>
                                </div>
                            </fieldset>


                            <fieldset>
                                <h4>Social media profiles:</h4>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-facebook">Facebook</label>
                                    <input type="text" name="f1-facebook" placeholder="Facebook..." class="f1-facebook form-control" id="f1-facebook">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-twitter">Twitter</label>
                                    <input type="text" name="f1-twitter" placeholder="Twitter..." class="f1-twitter form-control" id="f1-twitter">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="f1-google-plus">Google plus</label>
                                    <input type="text" name="f1-google-plus" placeholder="Google plus..." class="f1-google-plus form-control" id="f1-google-plus">
                                </div>
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Previous</button>
                                    <button type="submit" class="btn btn-submit">Submit</button>
                                </div>
                            </fieldset>
                    	
                    	</form>
                    </div>
                </div>
                    
            </div>
        </div>
@endsection

@section('script')
        <script src="/assets/bootzard/js/jquery.backstretch.min.js"></script>
        <script src="/assets/bootzard/js/retina-1.1.0.min.js"></script>
        <script src="/assets/bootzard/js/scripts.js"></script>
@endsection