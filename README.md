#KantxApp

##Proyecto de fin de curso 2015-2017 del ciclo formativo de Desarrollo de Aplicaciones Web


Proyecto multidisciplinar entre estudiantes de electrónica (LaSalle Berrozpe) y desarrollo de aplicaciones web (Zubiri-Manteo).
Este proyecto surgió por el problema de sedentarismo que hay en la sociedad actual, ya que hoy en dia mucha gente prefiere quedarse en casa jugando a videojuegos o simplemente viendo películas, por lo cual la idea surgió para intentar incentivar, motivar o facilitar la práctica deportiva a la sociedad y de esta manera poder vivir en un entorno más saludable mejorando así nuestra calidad de vida.

Ya que el deporte se practica habitualmente en espacios públicos nuestra idea es incentivar a la gente dando información sobre el estado de los mismos, de esta manera pueden saber si esta libre o ocupado en tiempo real además de otros parámetros físicos así como  la temperatura, humedad, lluvia, velocidad del viento y radiación solar esta información se transmite a través de un dispositivo GSM el cual envía los datos en forma de SMS a una red social.

Demostración:
http://kantxapp.herokuapp.com/es

Usuario de demostración:
Email: iker@iker.com | aitor@aitor.com | hafsa@hafsa.com | rudy@rudy.com
Contraseña: 123456

Características
--------

- **Local Authentication** usando email y contraseña
- **Social Authentication** usando Facebook y Twitter (socialite Laravel)
- Framework PHP MVC Laravel
- Bootstrap 3 + Webflow.io
- Formulario de contacto y Registro (mailgun) en desarrollo mailtrap.io
- Real Time Pusher service
- SMS to Http by Twilio
- **Account Management**
 - Detalles de perfil
 - Cambio de contraseña
 - Recuperación de contraseña

Instalación
---------------

La manera más sencilla de empezar es clonando el repositorio

```bash
# Clonar repositorio
git clone https://github.com/Kantxapp/KantxApp.git miproyecto

# Entrar en el directorio creado
cd miproyecto

# Instalar dependencias con NPM y composer
npm install
composer install

# Renombrar fichero ".env example" a ".env"
mv .env\ example .env
el .env actual utiliza las credenciales de desarrollo de c9 con nuestras api keys.

ejecutar servidor php ---> php artisan serve
```

# Laravel PHP Framework

<img src="http://programacion.net/files/article/20151219031213_laravel.png" width="200">
[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

<hr>

<img src="https://raw.github.com/mailgun/media/master/Mailgun_Primary.png" width="200">
- Ir a http://www.mailgun.com
- Registrarse y entrar al *nombre de dominio*
- Sobre el dominio, copiar y pegar la *API Key* y el *Default SMTP Login* al fichero `.env`

<hr>

<img src="https://media.licdn.com/media/AAEAAQAAAAAAAAMiAAAAJDBiMDZlMTY4LTlhOGUtNGRjNC1iNWQ1LTg1NGY2MzU2ZmM4OQ.png" width="200">
- Ir a https://pusher.com/
- Registrarse y entrar al *nombre de dominio*
- copiar las keys al .env


<hr>

<img src="http://blogs-images.forbes.com/alexkonrad/files/2015/05/Twilio_logo_white-e1430787211926.jpg" width="200">
- Ir a https://www.twilio.com/
- Registrarse comprar un numero de sms (free) y configurar el output, nuestro caso twilio/receive con los parametros en el Body de los sensores
- copiar las keys al .env

Listado de paquetes
----------------

package.json | composer.json

##Estructura del proyecto routes


| Domain | Method   | URI                             | Name                | Action                                                                 | Middleware                                           |
|--------|----------|---------------------------------|---------------------|------------------------------------------------------------------------|------------------------------------------------------|
|        | GET      | /                               |                     | Closure                                                                | web,localeSessionRedirect,localizationRedirect       |
|        | GET      | accept_friend/{id}              | accept_friend       | App\Http\Controllers\FriendshipsController@accept_friend               | web,auth                                             |
|        | GET      | add_friend/{id}                 | add_friend          | App\Http\Controllers\FriendshipsController@add_friend                  | web,auth                                             |
|        | GET      | api/user                        |                     | Closure                                                                | api,auth:api                                         |
|        | GET      | bridge                          |                     | Closure                                                                | web                                                  |
|        | POST     | broadcasting/auth               |                     | Illuminate\Broadcasting\BroadcastController@authenticate               | web                                                  |
|        | GET      | callback/{provider}             |                     | App\Http\Controllers\SocialAuthController@callback                     | web                                                  |
|        | GET      | check_relationship_status/{id}  | check               | App\Http\Controllers\FriendshipsController@check                       | web,auth                                             |
|        | POST     | contacto                        |                     | App\Http\Controllers\ContactController@sendContact                     | web                                                  |
|        | POST     | create/event                    | event.create        | App\Http\Controllers\EventsController@createEvent                      | web,auth                                             |
|        | GET      | create/event/{kantxa_id}        | event.createkantxa  | App\Http\Controllers\EventsController@createEventValues                | web,auth                                             |
|        | GET      | create/kantxa/{name}/{place_id} | kantxa.create       | App\Http\Controllers\GoogleMapsController@createKantxa                 | web,auth,admin                                       |
|        | POST     | create/post                     |                     | App\Http\Controllers\PostsController@store                             | web,auth                                             |
|        | GET      | edit/kantxa/{id}                | kantxa.edit         | App\Http\Controllers\KantxasController@editKantxa                      | web,auth,admin                                       |
|        | GET      | events                          | events              | App\Http\Controllers\GmapsController@index                             | web,auth                                             |
|        | GET      | feed                            | feed                | App\Http\Controllers\FeedsController@feed                              | web,auth                                             |
|        | GET      | find/kantxa                     | kantxa.find         | App\Http\Controllers\KantxasController@findKantxa                      | web,auth,admin                                       |
|        | GET      | friends                         | friends             | App\Http\Controllers\FriendshipsController@getUserFriends              | web,auth                                             |
|        | GET      | get/kantxas                     | kantxas.get         | App\Http\Controllers\KantxasController@getKantxas                      | web,auth                                             |
|        | GET      | get_auth_user_data              |                     | Closure                                                                | web,auth                                             |
|        | GET      | get_unread                      |                     | Closure                                                                | web,auth                                             |
|        | GET      | home                            |                     | App\Http\Controllers\HomeController@index                              | web,localeSessionRedirect,localizationRedirect,auth  |
|        | GET      | kantxa/info/{id}                | kantxa.info         | App\Http\Controllers\KantxasController@getKantxa                       | web,auth                                             |
|        | GET      | kantxas                         | kantxas             | App\Http\Controllers\KantxasController@index                           | web,auth                                             |
|        | GET      | like/{id}                       |                     | App\Http\Controllers\LikesController@like                              | web,auth                                             |
|        | GET      | localidades/{filter}            | city                | App\Http\Controllers\LocationController@cityXML                        | web,auth                                             |
|        | POST     | login                           |                     | App\Http\Controllers\Auth\LoginController@login                        | web,guest                                            |
|        | GET      | login                           | login               | App\Http\Controllers\Auth\LoginController@showLoginForm                | web,localeSessionRedirect,localizationRedirect,guest |
|        | POST     | logout                          | logout              | App\Http\Controllers\Auth\LoginController@logout                       | web                                                  |
|        | GET      | notifications                   | notifications       | App\Http\Controllers\HomeController@notifications                      | web,auth                                             |
|        | POST     | password/email                  |                     | App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail  | web,guest                                            |
|        | GET      | password/reset                  |                     | App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm | web,localeSessionRedirect,localizationRedirect,guest |
|        | POST     | password/reset                  |                     | App\Http\Controllers\Auth\ResetPasswordController@reset                | web,guest                                            |
|        | GET      | password/reset/{token}          |                     | App\Http\Controllers\Auth\ResetPasswordController@showResetForm        | web,localeSessionRedirect,localizationRedirect,guest |
|        | GET      | profile/edit/profile            | profile.edit        | App\Http\Controllers\ProfilesController@edit                           | web,auth                                             |
|        | PATCH    | profile/update/profile          | profile.update      | App\Http\Controllers\ProfilesController@update                         | web,auth                                             |
|        | GET      | profile/{slug}                  | profile             | App\Http\Controllers\ProfilesController@index                          | web,auth                                             |
|        | GET      | redirect/{provider}             |                     | App\Http\Controllers\SocialAuthController@redirect                     | web                                                  |
|        | POST     | register                        |                     | App\Http\Controllers\Auth\RegisterController@register                  | web,guest                                            |
|        | GET      | register                        | register            | App\Http\Controllers\Auth\RegisterController@showRegistrationForm      | web,localeSessionRedirect,localizationRedirect,guest |
|        | POST     | save/kantxa                     | kantxa.save         | App\Http\Controllers\GoogleMapsController@saveKantxa                   | web,auth,admin                                       |
|        | GET      | settings/account/edit           | account.edit        | App\Http\Controllers\AccountsController@edit                           | web,auth                                             |
|        | GET      | settings/account/show           | account.show        | App\Http\Controllers\AccountsController@show                           | web,auth                                             |
|        | PATCH    | settings/account/update         | account.update      | App\Http\Controllers\AccountsController@update                         | web,auth                                             |
|        | GET      | sports                          | sports              | App\Http\Controllers\SportsController@index                            | web,auth                                             |
|        | POST     | sports/kantxa/get               | sports.kantxaGet    | App\Http\Controllers\KantxasController@kantxaSportsGet                 | web,auth                                             |
|        | POST     | sports/kantxa/insert            | sports.kantxainsert | App\Http\Controllers\KantxasController@kantxaSportsInsert              | web,auth                                             |
|        | POST     | sports/user/get                 | sports.userGet      | App\Http\Controllers\SportsController@userSports                       | web,auth                                             |
|        | POST     | sports/user/insert              | sports.userinsert   | App\Http\Controllers\SportsController@userInsert                       | web,auth                                             |
|        | POST     | twilio/receive                  |                     | App\Http\Controllers\TwilioController@receiveMessage                   | web                                                  |
|        | GET      | twilio/send/{message}           |                     | App\Http\Controllers\TwilioController@sendMessage                      | web                                                  |
|        | GET      | unlike/{id}                     |                     | App\Http\Controllers\LikesController@unlike                            | web,auth                                             |
|        | PATCH    | update/kantxa                   | kantxa.saveEdit     | App\Http\Controllers\KantxasController@saveEditKantxa                  | web,auth,admin                                       |
|        | GET      | user/activation/{token}         | user.activate       | App\Http\Controllers\Auth\LoginController@activateUser                 | web,guest                                            |



Referencias
----------------
- Algolia: https://www.algolia.com/
- Pusher: https://pusher.com/
- Twilio: https://www.twilio.com/
- Vue.js: https://vuejs.org/


Uso de la API
----------------
 -------- ---------- --------------------------------- ----------------------- ---------------------------------------------------------- -------------- 
| Domain | Method   | URI                             | Name                  | Description                                              | Middleware   |
 -------- ---------- --------------------------------- ----------------------- ---------------------------------------------------------- -------------- 
|        | GET|HEAD | kantxa/{name}                   | kantxa.getname        | Devuelve la kantxa con el nombre que pongamos            | web          |
|        | GET|HEAD | kantxas                         | kantxas.get           | Devuelve todas las kantxas                               | web          |
|        | GET|HEAD | kantxas/{id}                    | kantxa.get            | Devuelve la kantxa con el id que pongamos                | web          |
|        | GET|HEAD | sensors                         | sensors.get           | Devuelve todos los sensores                              | web          |
|        | GET|HEAD | sensors/{sensor_id}             | sensor.get            | Devuelve el sensor con el id que pongamos                | web          |
|        | GET|HEAD | sensors/{sensor_id}/humedad     | sensor.gethumedad     | Devuelve la humedad del sensor cuyo id le demos          | web          |
|        | GET|HEAD | sensors/{sensor_id}/ocupado     | sensor.getocupado     | Devuelve si el recinto cuyo id le damos esta ocupado     | web          |
|        | GET|HEAD | sensors/{sensor_id}/radiacion   | sensor.getradiacion   | Devuelve la radiacion del sensor cuyo id le demos        | web          |
|        | GET|HEAD | sensors/{sensor_id}/temperatura | sensor.gettemperatura | Devuelve la temperatura del sensor cuyo id le demos      | web          |
|        | GET|HEAD | sensors/{sensor_id}/viento      | sensor.getviento      | Devuelve la valor del viento del sensor cuyo id le demos | web          |
 -------- ---------- --------------------------------- ----------------------- ---------------------------------------------------------- -------------- 

Licencia
-------

The MIT License (MIT)

Copyright (c) 2016 Iosu Recalde, Rubén Álvarez, Gorka Perez and Sergio Valera.

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.