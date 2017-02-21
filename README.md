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

- Mongoose (MongoLab)
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

<img src="data:image/png;base64,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" width="200">
- Ir a https://www.twilio.com/
- Registrarse comprar un numero de sms (free) y configurar el output, nuestro caso twilio/receive con los parametros en el Body de los sensores
- copiar las keys al .env

Listado de paquetes
----------------

package.json | composer.json

##Estructura del proyecto routes

 -------- ---------- --------------------------------- --------------------- ------------------------------------------------------------------------ ------------------------------------------------------ 
| Domain | Method   | URI                             | Name                | Action                                                                 | Middleware                                           |
 -------- ---------- --------------------------------- --------------------- ------------------------------------------------------------------------ ------------------------------------------------------ 
|        | GET|HEAD | /                               |                     | Closure                                                                | web,localeSessionRedirect,localizationRedirect       |
|        | GET|HEAD | accept_friend/{id}              | accept_friend       | App\Http\Controllers\FriendshipsController@accept_friend               | web,auth                                             |
|        | GET|HEAD | add_friend/{id}                 | add_friend          | App\Http\Controllers\FriendshipsController@add_friend                  | web,auth                                             |
|        | GET|HEAD | api/user                        |                     | Closure                                                                | api,auth:api                                         |
|        | GET|HEAD | bridge                          |                     | Closure                                                                | web                                                  |
|        | POST     | broadcasting/auth               |                     | Illuminate\Broadcasting\BroadcastController@authenticate               | web                                                  |
|        | GET|HEAD | callback/{provider}             |                     | App\Http\Controllers\SocialAuthController@callback                     | web                                                  |
|        | GET|HEAD | check_relationship_status/{id}  | check               | App\Http\Controllers\FriendshipsController@check                       | web,auth                                             |
|        | POST     | contacto                        |                     | App\Http\Controllers\ContactController@sendContact                     | web                                                  |
|        | POST     | create/event                    | event.create        | App\Http\Controllers\EventsController@createEvent                      | web,auth                                             |
|        | GET|HEAD | create/event/{kantxa_id}        | event.createkantxa  | App\Http\Controllers\EventsController@createEventValues                | web,auth                                             |
|        | GET|HEAD | create/kantxa/{name}/{place_id} | kantxa.create       | App\Http\Controllers\GoogleMapsController@createKantxa                 | web,auth,admin                                       |
|        | POST     | create/post                     |                     | App\Http\Controllers\PostsController@store                             | web,auth                                             |
|        | GET|HEAD | edit/kantxa/{id}                | kantxa.edit         | App\Http\Controllers\KantxasController@editKantxa                      | web,auth,admin                                       |
|        | GET|HEAD | events                          | events              | App\Http\Controllers\GmapsController@index                             | web,auth                                             |
|        | GET|HEAD | feed                            | feed                | App\Http\Controllers\FeedsController@feed                              | web,auth                                             |
|        | GET|HEAD | find/kantxa                     | kantxa.find         | App\Http\Controllers\KantxasController@findKantxa                      | web,auth,admin                                       |
|        | GET|HEAD | friends                         | friends             | App\Http\Controllers\FriendshipsController@getUserFriends              | web,auth                                             |
|        | GET|HEAD | get/kantxas                     | kantxas.get         | App\Http\Controllers\KantxasController@getKantxas                      | web,auth                                             |
|        | GET|HEAD | get_auth_user_data              |                     | Closure                                                                | web,auth                                             |
|        | GET|HEAD | get_unread                      |                     | Closure                                                                | web,auth                                             |
|        | GET|HEAD | home                            |                     | App\Http\Controllers\HomeController@index                              | web,localeSessionRedirect,localizationRedirect,auth  |
|        | GET|HEAD | kantxa/info/{id}                | kantxa.info         | App\Http\Controllers\KantxasController@getKantxa                       | web,auth                                             |
|        | GET|HEAD | kantxas                         | kantxas             | App\Http\Controllers\KantxasController@index                           | web,auth                                             |
|        | GET|HEAD | like/{id}                       |                     | App\Http\Controllers\LikesController@like                              | web,auth                                             |
|        | GET|HEAD | localidades/{filter}            | city                | App\Http\Controllers\LocationController@cityXML                        | web,auth                                             |
|        | POST     | login                           |                     | App\Http\Controllers\Auth\LoginController@login                        | web,guest                                            |
|        | GET|HEAD | login                           | login               | App\Http\Controllers\Auth\LoginController@showLoginForm                | web,localeSessionRedirect,localizationRedirect,guest |
|        | POST     | logout                          | logout              | App\Http\Controllers\Auth\LoginController@logout                       | web                                                  |
|        | GET|HEAD | notifications                   | notifications       | App\Http\Controllers\HomeController@notifications                      | web,auth                                             |
|        | POST     | password/email                  |                     | App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail  | web,guest                                            |
|        | GET|HEAD | password/reset                  |                     | App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm | web,localeSessionRedirect,localizationRedirect,guest |
|        | POST     | password/reset                  |                     | App\Http\Controllers\Auth\ResetPasswordController@reset                | web,guest                                            |
|        | GET|HEAD | password/reset/{token}          |                     | App\Http\Controllers\Auth\ResetPasswordController@showResetForm        | web,localeSessionRedirect,localizationRedirect,guest |
|        | GET|HEAD | profile/edit/profile            | profile.edit        | App\Http\Controllers\ProfilesController@edit                           | web,auth                                             |
|        | PATCH    | profile/update/profile          | profile.update      | App\Http\Controllers\ProfilesController@update                         | web,auth                                             |
|        | GET|HEAD | profile/{slug}                  | profile             | App\Http\Controllers\ProfilesController@index                          | web,auth                                             |
|        | GET|HEAD | redirect/{provider}             |                     | App\Http\Controllers\SocialAuthController@redirect                     | web                                                  |
|        | POST     | register                        |                     | App\Http\Controllers\Auth\RegisterController@register                  | web,guest                                            |
|        | GET|HEAD | register                        | register            | App\Http\Controllers\Auth\RegisterController@showRegistrationForm      | web,localeSessionRedirect,localizationRedirect,guest |
|        | POST     | save/kantxa                     | kantxa.save         | App\Http\Controllers\GoogleMapsController@saveKantxa                   | web,auth,admin                                       |
|        | GET|HEAD | settings/account/edit           | account.edit        | App\Http\Controllers\AccountsController@edit                           | web,auth                                             |
|        | GET|HEAD | settings/account/show           | account.show        | App\Http\Controllers\AccountsController@show                           | web,auth                                             |
|        | PATCH    | settings/account/update         | account.update      | App\Http\Controllers\AccountsController@update                         | web,auth                                             |
|        | GET|HEAD | sports                          | sports              | App\Http\Controllers\SportsController@index                            | web,auth                                             |
|        | POST     | sports/kantxa/get               | sports.kantxaGet    | App\Http\Controllers\KantxasController@kantxaSportsGet                 | web,auth                                             |
|        | POST     | sports/kantxa/insert            | sports.kantxainsert | App\Http\Controllers\KantxasController@kantxaSportsInsert              | web,auth                                             |
|        | POST     | sports/user/get                 | sports.userGet      | App\Http\Controllers\SportsController@userSports                       | web,auth                                             |
|        | POST     | sports/user/insert              | sports.userinsert   | App\Http\Controllers\SportsController@userInsert                       | web,auth                                             |
|        | POST     | twilio/receive                  |                     | App\Http\Controllers\TwilioController@receiveMessage                   | web                                                  |
|        | GET|HEAD | twilio/send/{message}           |                     | App\Http\Controllers\TwilioController@sendMessage                      | web                                                  |
|        | GET|HEAD | unlike/{id}                     |                     | App\Http\Controllers\LikesController@unlike                            | web,auth                                             |
|        | PATCH    | update/kantxa                   | kantxa.saveEdit     | App\Http\Controllers\KantxasController@saveEditKantxa                  | web,auth,admin                                       |
|        | GET|HEAD | user/activation/{token}         | user.activate       | App\Http\Controllers\Auth\LoginController@activateUser                 | web,guest                                            |
 -------- ---------- --------------------------------- --------------------- ------------------------------------------------------------------------ ------------------------------------------------------ 


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