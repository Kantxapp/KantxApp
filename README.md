# Sense-Rover

##Proyecto de fin de curso 2014-2016 del ciclo formativo de desarrollo de aplicaciones web


Proyecto multidisciplinar entre estudiantes de electrónica y desarrollo de aplicaciones web.
La finalidad del proyecto es ayudar al agricultor mediante nuestra aplicación web para gestionar y generar diferentes funcionalidades, que le puedan servir de ayuda a través de los datos recibidos de un dron. Por ejemplo, alertas y estadísticas.

Demostración:
http://senserover.zubirimanteoweb.com/

Usuario de demostración:
Email: dw32igsr1@gmail.com
Contraseña: 12345678


Características
--------

- **Local Authentication** usando email y contraseña
- **OAuth 2.0 Authentication** Google
- Estructura del proyecto MVC
- Node.js + Express
- Mongoose (MongoLab)
- Bootstrap 3 + Webflow.io
- Formulario de contacto (mailgun)
- Sokect.io
- MQTT
- **Account Management**
 - Detalles de perfil
 - Cambio de contraseña
 - Recuperación de contraseña


Instalación
---------------

La manera más sencilla de empezar es clonando el repositorio

```bash
# Clonar repositorio
git clone https://github.com/DW32-IGSR/senserover miproyecto

# Entrar en el directorio creado
cd miproyecto

# Instalar dependencias con NPM
npm install

# Renombrar fichero ".env example" a ".env"
mv .env\ example .env

node app.js
```

Obtención de API Keys
------------------

Para utilizar cualquiera de las API incluidas o métodos de autenticación OAuth, tendrá que obtener credenciales apropiadas:  ID Cliente, Clave cliente secreta, API Key, o
Usuario & Contraseña. Usted tendrá que ir a través de cada proveedor para generar nuevas credenciales.


<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/1000px-Google_2015_logo.svg.png" width="200">
- Visitar [Google Cloud Console](https://cloud.google.com/console/project)
- Haga click en el botón **Crear Proyecto**
- Introducir *Nombre de Proyecto* a continuación, haga clic en el botón **Crear**
- A continuación, haga click en *Autenticación APIs* en la barra lateral y seleccione la pestaña *API*
- Haga click en *API de Google+* luego en *APIs Social*, haga click en **Habilitar API**
- A continuación, en *Autenticación APIs* en la barra lateral haga click en la pestaña *Credenciales*
- Haga click en el botón **Crear nuevo cliente ID**
- Seleccionar *Aplicación Web* y haga click en **la pantalla para Configurar Consentimiento**
Rellene los campos necesarios y a continuación, haga clic en **Guardar**
- En el ID de cliente Crear diálogo modal:
 - **Tipo de aplicación**: Aplicación Web
 - **Autorizado Javascript orígenes**: http: // localhost: 3000
 - **Autorizado redirigir URI**: http://localhost:3000/auth/google/callback
- Haga click en el botón **Crear ID de cliente*
- Copiar y pegar el *ID de cliente* y *Clave cliente secreta* en `.env`

<hr>

<img src="https://raw.github.com/mailgun/media/master/Mailgun_Primary.png" width="200">
- Ir a http://www.mailgun.com
- Registrarse y entrar al *nombre de dominio*
- Sobre el dominio, copiar y pegar la *API Key* y el *Default SMTP Login* al fichero `.env`

<hr>

<img src="https://mongolab.com/company/brand/resources/MongoLab-Logo-Square-OnWhite-RGB.png" width="200">
- Ir https://mongolab.com/
- Registrarse y accerder a *Account*
- Seleccionar de *Account Users* la cuenta de usuario
- Copiar y pegar la *API Key* al fichero `.env`, y habilitar el acceso a la API *Data API Access*


Estructura del proyecto
-----------------

| Nombre                                        | Descripción                                                        |
| --------------------------------------------- | ------------------------------------------------------------------ |
| **config**/passport.js                        | Passport Local y OAuth estrategias.                                |
| **controllers**/Administracion.js             | Controller para administración                                     |
| **controllers**/Alertas.js                    | Controller el form de alertas                                      |
| **controllers**/Comprar.js                    | Controller el form de compra/renovación                            |
| **controllers**/DatosAPI.js                   | Controller para las API de datos que envían los drones.            |
| **controllers**/DronesAPI.js                  | Controller para las API de drones.                                 |
| **controllers**/Email.js                      | Controller para enviar correos.                                    |
| **controllers**/error404.js                   | Controller que salta cuando no se envían datos APIs correctamente. |
| **controllers**/Estructura_Email.js           | Controller para Mailgun.                                           |
| **controllers**/Home.js                       | Controller para sessiones de usuario.                              |
| **controllers**/LoginRegistro.js              | Controller para login y registro.                                  |
| **controllers**/Perfil.js                     | Controller para el perfil de usuario.                              |
| **controllers**/Productos.js                  | Controller para productos.                                         |
| **controllers**/Pronosticos.js                | Controller para pronósticos.                                       |
| **controllers**/RangoFecha.js                 | Controller para el form de rango de fechas.                        |
| **controllers**/Tienda.js                     | Controller para la tienda.                                         |
| **controllers**/UploadImage.js                | Controller para poder subir avatares.                              |
| **controllers**/validadarAPI.js               | Controller para validar en el servidor las APIs.                   |
| **models**/Alertas.js                         | Schema Mongoose y model de Alertas.                                |
| **models**/Dato.js                            | Schema Mongoose y model de Datos.                                  |
| **models**/Drones.js                          | Schema Mongoose y model de Drones.                                 |
| **models**/HistorialPedidos.js                | Schema Mongoose y model de HistorialPedidos.                       |
| **models**/Productos.js                       | Schema Mongoose y model de Productos.                              |
| **models**/Usuario.js                         | Schema Mongoose y model de Usuario                                 |
| **public**/                                   | (fonts, css, js, img).                                             |
| **public**/**avatar**/                        | El lugar donde se guardan los avatares.                            |
| **public**/**bootstrap**/                     | Todo lo relacinado con bootstrap.                                  |
| **public**/**css**/                           | Ubicación de los css.                                              |
| **public**/**dist**/                          | Un theme de boostrap.                                              |
| **public**/**icons**/                         | Iconos que utilizamos.                                             |
| **public**/**images**/                        | Imágenes que utilizamos.                                           |
| **public**/**js**/browserMqtt.js              | Librería Mqtt.                                                     |
| **public**/**js**/comprar.js                  | Todo lo relacionado con la página de compra.                       |
| **public**/**js**/cookie.js                   | Script para las cookies.                                           |
| **public**/**js**/migrafica2.js               | Script para mostrar gráficas.                                      |
| **public**/**js**/modernizr.js                | Librería Webflow.                                                  |
| **public**/**js**/myscriptMongo.js            | Script que controla toda la página de administración.              |
| **public**/**js**/pace.min.js                 | Librería pace, barra de progreso de carga de la página.            |
| **public**/**js**/scriptMqtt.js               | Script para el protocolo MQTT.                                     |
| **public**/**js**/scriptsMapa.js              | Script para las rutas del dron.                                    |
| **public**/**js**/subscripcion.js             | Script para el modal de subscripción.                              |
| **public**/**js**/validar_administracion.js   | Validaciones de formularios de la página administración.           |
| **public**/**js**/validar_compra.js           | Validaciones de formularios de la página compra.                   |
| **public**/**js**/validar_index.js            | Validaciones de formularios de la página index.                    |
| **public**/**js**/validar_perfil.js           | Validaciones de formularios de la página perfil.                   |
| **public**/**js**/validar_recoverPass.js      | Validación de formularios del modal de recuperación de contraseña. |
| **public**/**js**/webflow.js                  | Librería Webflow.                                                  |
| **public**/**libs**/                          | Librerias JQuery.                                                  |
| **views**/**layouts**/main.handlebars         | Base de la plantilla.                                              |
| **views/partials**/modal.handlebars           | Plantilla del modal de login/registro.                             |
| **views/partials**/404.handlebars             | Página de error.                                                   |
| **views/partials**/admin.handlebars           | Página de administración de la base de datos.                      |
| **views/partials**/administracion.handlebars  | Página de administración del dron.                                 |
| **views/partials**/comprar.handlebars         | Página de la tienda.                                               |
| **views/partials**/index.handlebars           | Página principal de la Web.                                        |
| **views/partials**/perfil.handlebars          | Página de perfil de usuario.                                       |
| **views/partials**/recoverPassword.handlebars | Página para mostrar modal de recuperación de contraseña.           |
| .env. example                                 | Tus API keys, tokens, contraseñas y database URI.                  |
| app.js                                        | Archivo principal de la aplicación.                                |



Listado de paquetes
----------------

| Paquete                         | Descripción                                                           |
| ------------------------------- | --------------------------------------------------------------------- |
| bcrypt-nodejs                   | Módulo para hash y contraseñas de usuarios.                           |
| body-parser                     | Express 4 middleware.                                                 |
| dotenv                          | Módulo para cargar variables de entorno del archivo .env              |
| express                         | Node.js web framework.                                                |
| express-session                 | Express 4 middleware.                                                 |
| express-flash                   | Módulo para mostrar mensajes flash.                                   |
| express-validator               | Módulo para validar formularios.                                      |
| express-handlebars              | Plantilla de express.                                                 |
| handlebars                      | Plantilla para construir con eficacia.                                |
| http                            | Módulo request.                                                       |
| lodash                          | Módulo para utilidades de JavaScript.                                 |
| mailgun-js                      | Módulo para el uso de la API de Mailgun.                              |
| moment                          | Módulo para analizar, validar, manipular y dar formato a las fechas.  |
| mongoose                        | MongoDB ODM.                                                          |
| mqtt                            | Módulo para el protocolo MQTT.                                        |
| multer                          | Middleware para el manejo de imágenes.                                |
| passport                        | Módulo para la autenticación.                                         |
| passport-google-oauth           | Iniciar sesión con Google.                                            |
| passport-local                  | Iniciar sesión mediante usuario y contraseña.                         |
| request                         | Librería HTTP request.                                                |
| socket.io                       | Realtime framework server.                                            |
| util                            | Node.JS util module.                                                  |
| validator                       | String validation and sanitization.                                   |


Uso de la API
----------------
| Método    | Ruta (http://senserover.zubirimanteoweb.com)                                                                              | Ejemplo                                                                                                   |
| --------- | ------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| GET       | /productos                                                                                                                | /productos                                                                                                |
| GET       | /productos/:id_producto                                                                                                   | /productos/5693728d3890294f10406189                                                                       |
| GET       | /drones/:id_dron                                                                                                          | /drones/56af4d51764ae2a8c2618218                                                                          |
| GET       | /drones/usuario/:id_usuario                                                                                               | /drones/usuario/56af4cdb764ae2a8c2618217                                                                  |
| GET       | /datos/:id_dron                                                                                                           | /datos/56af4d51764ae2a8c2618218                                                                           |
| GET       | /datos/:id_dron/temperatura                                                                                               | /datos/56af4d51764ae2a8c2618218/temperatura                                                               |
| GET       | /datos/:id_dron/humedad                                                                                                   | /datos/56af4d51764ae2a8c2618218/humedad                                                                   |
| GET       | /datos/:id_dron/co2                                                                                                       | /datos/56af4d51764ae2a8c2618218/co2                                                                       |
| GET       | /datos/:id_dron/radiacion                                                                                                 | /datos/56af4d51764ae2a8c2618218/radiacion                                                                 |
| GET       | /datos/:id_dron/luminosidad                                                                                               | /datos/56af4d51764ae2a8c2618218/luminosidad                                                               |
| GET       | /api/datos/:id_dron/t/:temperatura/h/:humedad/co2/:co2/r/:radiacion/l/:luminosidad/b/:bateria/lat/:latitud/long/:longitud | /api/datos/56939648e4b0166e3b6a60f6/t/6/h/66/co2/-300/r/44.0/l/5600/b/10.22/lat/43.32206/long/-1.978376   |


Referencias
----------------
- https://github.com/sahat/hackathon-starter
- https://github.com/carlosazaustre/node-api-rest-example/tree/feature-express4
- https://github.com/ctavan/express-validator
- https://github.com/expressjs/multer
 

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