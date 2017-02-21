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
                    	<form role="form" action="{{ url('/create/event') }}" method="post" class="f1">
                            {{csrf_field()}}
                    		<h3>CREANDO EVENTO EN {{$kantxa->name}}</h3>
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
                    				<p>detalles</p>
                    			</div>
                    		    <div class="f1-step">
                    				<div class="f1-step-icon"><i class="fa fa-twitter"></i></div>
                    				<p>invita a tus amigos</p>
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
                                        <select class="form-control" id="f1-event-sport" name="sport_id">
                                            @foreach($sports as $sport)
                                                <option value="{{$sport->id}}" name="sport_id">{{$sport->name}}</option>
                                            @endforeach
                                        </select>
                                </div>
                                
                                
                                
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-next">Siguiente</button>
                                </div>
                            </fieldset>

                            <fieldset>
                                <h4>Fecha:</h4>
                                <div class="form-group">
                                    <label class="sr-only" for="fecha">Fecha</label>
                                    <input type="date" name="fecha">
                                </div>
                                <h4>Hora:</h4>
                                <div class="form-group">
                                    <label class="sr-only" for="hora">Hora</label>
                                    <input type="time" name="time">
                                </div>
                                <div class="form-group">
                                    <h4>Numero de jugadores:</h4>
                                    <input type="number" min="2" max="18" step="1" value="2" name="max_jugadores">
                                </div>
                                <div class="form-group">
                                    <h4>Comentarios sobre el evento (normas etc...):</h4>
                                    <input type="text" name="rules">
                                </div>
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Anterior</button>
                                    <button type="button" class="btn btn-next">Siguente</button>
                                </div>
                            </fieldset>


                            <fieldset>
                                <h4>Resumen:</h4>
                                
                                <div class="f1-buttons">
                                    <button type="button" class="btn btn-previous">Anterior</button>
                                    <button type="submit" class="btn btn-submit">¡Crear evento!</button>
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