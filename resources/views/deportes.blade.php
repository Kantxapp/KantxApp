@extends('layouts.deportes')

@section('content')

<div class="container">
 
    <div class="row">
        </br>
        </br>
        </br>
        </br>
        </br>
    
     <div class="col-md-8 ">
       <div id="maincontent">
                <div style="clear:both"></div>
                    <h1 class="neweventh1">Selecciona tus deportes</h1>
                    <div id="sports-wrapper">
                        <p>Selecciona los deportes que quieres añadir a tu perfil:</p>
                         <div id="clearfloat"></div>
                            <div class="sport-box searchParent" title="Fútbol 7" id="box1" sort="Fútbol 7">       
                                    <input style="display:none;" name="deporte" type="checkbox" value="1" >
                                    <span style="display:none;" class="namesport" >Fútbol 7</span>
                                    <img width="60" align="absmiddle" src="/assets/images/Deportes/futbol7.png" alt="Responsive image"/>                                   
                            </div>
                            <div class="sport-box searchParent" title="Fútbol 11" id="box2" sort="Fútbol 11">       
                                    <input style="display:none;" name="deporte" type="checkbox" value="2" >
                                    <span style="display:none;" class="namesport" >Fútbol 11</span>
                                    <img width="60" align="absmiddle" src="/assets/images/Deportes/futbol11.png" alt="Responsive image"/>                                   
                            </div>
                            <div class="sport-box searchParent" title="Fútbol Sala" id="box3" sort="Fútbol Sala">       
                                    <input style="display:none;" name="deporte" type="checkbox" value="3" >
                                    <span style="display:none;" class="namesport" >Fútbol Sala</span>
                                    <img width="60" align="absmiddle" src="/assets/images/Deportes/futbol_sala_asfalto.png" alt="Responsive image"/>                                   
                            </div>
                            <div class="sport-box searchParent" title="Tenis" id="box5" sort="Tenis">       
                                    <input style="display:none;" name="deporte" type="checkbox" value="5" >
                                    <span style="display:none;" class="namesport" >Tenis</span>
                                    <img width="60" align="absmiddle" src="/assets/images/Deportes/tenis.png" alt="Responsive image"/>                                   
                            </div>
                            <div class="sport-box searchParent" title="Baloncesto" id="box6" sort="Baloncesto">       
                                    <input style="display:none;" name="deporte" type="checkbox" value="6" >
                                    <span style="display:none;" class="namesport" >Baloncesto</span>
                                    <img width="60" align="absmiddle" src="/assets/images/Deportes/baloncesto.png" alt="Responsive image"/>                                   
                            </div>
                            <div class="sport-box searchParent" title="Pádel" id="box7" sort="Pádel">       
                                    <input style="display:none;" name="deporte" type="checkbox" value="7" >
                                    <span style="display:none;" class="namesport" >Pádel</span>
                                    <img width="60" align="absmiddle" src="/assets/images/Deportes/padel.png" alt="Responsive image"/>                                   
                            </div>
                            <div class="sport-box deportesSort searchParent" title="Frontenis" id="box9" sort="Frontenis">       
                                    <input style="display:none;" name="deporte" type="checkbox" value="9" >
                                    <span style="display:none;" class="namesport" >Frontenis</span>
                                    <img width="60" align="absmiddle" src="/assets/images/Deportes/frontenis.png" alt="Responsive image"/>
                            </div>
                            <div class="sport-box deportesSort searchParent" title="Squash" id="box10" sort="Squash">       
                                    <input style="display:none;" name="deporte" type="checkbox" value="10" >
                                    <span style="display:none;" class="namesport" >Squash</span>
                                    <img width="60" align="absmiddle" src="/assets/images/Deportes/squash.png" alt="Responsive image"/>
                            </div>
                            <div class="sport-box deportesSort searchParent" title="Balonmano" id="box11" sort="Balonmano">       
                                    <input style="display:none;" name="deporte" type="checkbox" value="11" >
                                    <span style="display:none;" class="namesport" >Balonmano</span>
                                    <img width="60" align="absmiddle" src="/assets/images/Deportes/balonmano.png" alt="Responsive image"/>
                            </div>
                            <div class="sport-box deportesSort searchParent" title="Volleyball" id="box12" sort="Volleyball">       
                                    <input style="display:none;" name="deporte" type="checkbox" value="12" >
                                    <span style="display:none;" class="namesport" >Volleyball</span>
                                    <img width="60" align="absmiddle" src="/assets/images/Deportes/voleibol.png" alt="Responsive image"/>
                            </div>
                            <div class="sport-box deportesSort searchParent" title="Ciclismo (Carretera)" id="box21" sort="Ciclismo (Carretera)">       
                                    <input style="display:none;" name="deporte" type="checkbox" value="21" >
                                    <span style="display:none;" class="namesport" >Ciclismo (Carretera)</span>
                                    <img width="60" align="absmiddle" src="/assets/images/Deportes/bicicleta-carretera.png" alt="Responsive image"/>
                            </div>
                            <div class="sport-box deportesSort searchParent" title="Ciclismo (Montaña)" id="box22" sort="Ciclismo (Montaña)">       
                                    <input style="display:none;" name="deporte" type="checkbox" value="22" >
                                    <span style="display:none;" class="namesport" >Ciclismo (Montaña)</span>
                                    <img width="60" align="absmiddle" src="/assets/images/Deportes/bicicleta-montana.png" alt="Responsive image"/>
                            </div>
                            <div class="sport-box deportesSort searchParent" title="Running" id="box23" sort="Running">       
                                    <input style="display:none;" name="deporte" type="checkbox" value="23" >
                                    <span style="display:none;" class="namesport" >Running</span>
                                    <img width="60" align="absmiddle" src="/assets/images/Deportes/running.png" alt="Responsive image"/>
                            </div>
                            <div class="sport-box deportesSort searchParent" title="Judo" id="box37" sort="Judo">       
                                    <input style="display:none;" name="deporte" type="checkbox" value="37" >
                                    <span style="display:none;" class="namesport" >Judo</span>
                                    <img width="60" align="absmiddle" src="/assets/images/Deportes/judo.png" alt="Responsive image"/>
                                </div>
                            <div class="sport-box deportesSort searchParent" title="Karate" id="box38" sort="Karate">       
                                    <input style="display:none;" name="deporte" type="checkbox" value="38" >
                                    <span style="display:none;" class="namesport" >Karate</span>
                                    <img width="60" align="absmiddle" src="/assets/images/Deportes/karate.png" alt="Responsive image"/>
                                </div>
                            <div class="sport-box deportesSort searchParent" title="Natación" id="box39" sort="Natación">       
                                    <input style="display:none;" name="deporte" type="checkbox" value="39" >
                                    <span style="display:none;" class="namesport" >Natación</span>
                                    <img width="60" align="absmiddle" src="/assets/images/Deportes/natacion.png" alt="Responsive image"/>
                                </div>
                            <div class="sport-box deportesSort searchParent" title="Senderismo" id="box41" sort="Senderismo">       
                                    <input style="display:none;" name="deporte" type="checkbox" value="41" >
                                    <span style="display:none;" class="namesport" >Senderismo</span>
                                    <img width="60" align="absmiddle" src="/assets/images/Deportes/senderismo.png" "Responsive image"/>
                                </div>
                            <div class="sport-box deportesSort searchParent" title="Taekwondo" id="box60" sort="Taekwondo">       
                                    <input style="display:none;" name="deporte" type="checkbox" value="60" >
                                    <span style="display:none;" class="namesport" >Taekwondo</span>
                                    <img width="60" align="absmiddle" src="/assets/images/Deportes/taekwondo.png" "Responsive image"/>
                                </div>
                            <div class="sport-box deportesSort searchParent" title="Spinning" id="box61" sort="Spinning">       
                                    <input style="display:none;" name="deporte" type="checkbox" value="61" >
                                    <span style="display:none;" class="namesport" >Spinning</span>
                                    <img width="60" align="absmiddle" src="/assets/images/Deportes/spinning.png" "Responsive image"/>
                                </div>
                             <div class="sport-box deportesSort searchParent" title="Pilates" id="box66" sort="Pilates">       
                                    <input style="display:none;" name="deporte" type="checkbox" value="66" >
                                    <span style="display:none;" class="namesport" >Pilates</span>
                                    <img width="60" align="absmiddle" src="/assets/images/Deportes/pilates.png" "Responsive image"/>
                                </div>
                            <div class="sport-box deportesSort searchParent" title="Entrenamiento personal" id="box75" sort="Entrenamiento personal">       
                                    <input style="display:none;" name="deporte" type="checkbox" value="75" >
                                    <span style="display:none;" class="namesport" >Entrenamiento personal</span>
                                    <img width="60" align="absmiddle" src="/assets/images/Deportes/running.png" "Responsive image"/>
                                </div>
                    </div>
        </div>                    
             
          </br>
          </br>
          </br>
        <!--</div>-->
        <!--</div>-->
        </div>
    </div>
</div>
@endsection