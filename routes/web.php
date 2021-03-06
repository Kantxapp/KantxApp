<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
//Pages that need to be localized
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect']
    ],
    function()
    {
        /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
        Route::get('/', function () {
            return view('welcome');
        });
        Route::get('/home', 'HomeController@index');
        
        // Authentication Routes...
        Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
        
        // Registration Routes...
        Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
        
        // Password Reset Routes...
        Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
        Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
        
    });//end localized routes group
    
//Authentication Routes...
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('user/activation/{token}', 'Auth\LoginController@activateUser')->name('user.activate');

Route::get('/redirect/{provider}', 'SocialAuthController@redirect');
Route::get('/callback/{provider}', 'SocialAuthController@callback');

Route::get('settings/account/show', 'AccountsController@show')->name('account.show');
Route::get('settings/account/edit', 'AccountsController@edit')->name('account.edit');
Route::patch('settings/account/update', 'AccountsController@update')->name('account.update');

Route::post('/contacto', 'ContactController@sendContact');

Route::get('/twilio/send/{message}', 'TwilioController@sendMessage');
Route::post('/twilio/receive', 'TwilioController@receiveMessage');

// Rutas futuras:
Route::get('/bridge', function() {
    $pusher = App::make('pusher');

    $pusher->trigger( 'test-channel',
                      'test-event', 
                      array('text' => 'Preparing the Pusher Laracon.eu workshop!'));

    return view('pusher');
});
Route::group(['middleware' => 'auth'], function(){
    Route::get('/profile/{slug}', [
        'uses' => 'ProfilesController@index',
        'as' => 'profile'
    ]);
    Route::get('/profile/edit/profile', [
        'uses' => 'ProfilesController@edit',
        'as' => 'profile.edit'
    ]);
    Route::patch('/profile/update/profile', [
        'uses' => 'ProfilesController@update',
        'as' => 'profile.update'
    ]);
    Route::get('/check_relationship_status/{id}', [
        'uses' => 'FriendshipsController@check',
        'as' => 'check'
    ]);
    Route::get('/add_friend/{id}', [
        'uses' => 'FriendshipsController@add_friend',
        'as' => 'add_friend'
    ]);
    Route::get('/accept_friend/{id}', [
        'uses' => 'FriendshipsController@accept_friend',
        'as' => 'accept_friend'
    ]);
    Route::get('get_unread', function(){
        return Auth::user()->unreadNotifications;
    });
    Route::get('/notifications', [
        'uses' => 'HomeController@notifications',
        'as' => 'notifications'
    ]);
    Route::get('/feed', [
        'uses' => 'FeedsController@feed',
        'as' => 'feed'
    ]);
    Route::post('/create/post', [
        'uses' => 'PostsController@store'
    ]);
    Route::get('/get_auth_user_data', function(){
        return Auth::user();
    });
    Route::get('/like/{id}', [
        'uses' => 'LikesController@like'
    ]);
    Route::get('/unlike/{id}', [
        'uses' => 'LikesController@unlike'
    ]);
    Route::get('/localidades/{filter}', [
        'uses' => 'LocationController@cityXML',
        'as' => 'city'
    ]);
    Route::get('/sports', [
        'uses' => 'SportsController@index',
        'as' => 'sports'
    ]);
    Route::get('friends', [
        'uses' => 'FriendshipsController@getUserFriends',
        'as' => 'friends'
    ]);
    
    Route::get('/kantxas', [
        'uses' => 'KantxasController@index',
        'as' => 'kantxas'
    ]);
    Route::get('/events', [
        'uses' => 'GmapsController@index',
        'as' => 'events'
    ]);
    Route::get('/event/{id}', [
        'uses' =>'EventsController@getEvent',
        'as' => 'event.get'
    ]);
    Route::get('/event/participate/{id}', [
        'uses' => 'EventsController@participate',
        'as' =>'participate'
    ]);
    Route::post('/create/event', [
        'uses' => 'EventsController@createEvent',
        'as' => 'event.create'
    ]);
    Route::get('/create/event/{kantxa_id}', [
        'uses' => 'EventsController@createEventValues',
        'as' => 'event.createkantxa'
    ]);
    Route::get('/get/kantxas', [
    'uses' => 'KantxasController@getKantxas',
    'as' => 'kantxas.get'
    ]);
    Route::get('/request/kantxa', [
    'uses' => 'KantxasController@requestKantxa',
    'as' => 'kantxa.request'
    ]);
    Route::post('/request/kantxa/send', [
    'uses' => 'KantxasController@requestKantxaSend',
    'as' => 'kantxa.requestsend'
    ]);
    
    Route::get('/kantxa/info/{id}', [
    'uses' => 'KantxasController@getKantxa',
    'as' => 'kantxa.info'
    ]);
    
    Route::post('/sports/user/insert', [
        'uses' => 'SportsController@userInsert',
        'as' => 'sports.userinsert'
    ]);
    Route::post('/sports/user/get', [
        'uses' => 'SportsController@userSports',
        'as' => 'sports.userGet'
    ]);
    Route::post('/sports/kantxa/insert', [
        'uses' => 'KantxasController@kantxaSportsInsert',
        'as' => 'sports.kantxainsert'
    ]);
    Route::post('/sports/kantxa/get', [
        'uses' => 'KantxasController@kantxaSportsGet',
        'as' => 'sports.kantxaGet'
    ]);
    Route::group(['middleware' => 'admin'], function()
    {
        Route::get('/create/kantxa/{name}/{place_id}', [
        'uses' => 'GoogleMapsController@createKantxa',
        'as' => 'kantxa.create'
        ]);
        Route::get('/find/kantxa', [
        'uses' => 'KantxasController@findKantxa',
        'as' => 'kantxa.find'
        ]);
        Route::post('/save/kantxa', [
            'uses' => 'GoogleMapsController@saveKantxa',
            'as' => 'kantxa.save'
        ]);
        Route::get('/edit/kantxa/{id}', [
            'uses' => 'KantxasController@editKantxa',
            'as' => 'kantxa.edit'
        ]);
        Route::patch('/update/kantxa/', [
            'uses' => 'KantxasController@saveEditKantxa',
            'as' => 'kantxa.saveEdit'
        ]);

    });
    

    
});

    //API
    Route::get('/sensors', [
        'uses' => 'ApiController@getSensors',
        'as' => 'sensors.get'
    ]);
    Route::get('/sensors/{sensor_id}', [
        'uses' => 'ApiController@getSensor',
        'as' => 'sensor.get'
    ]);
    Route::get('/sensors/{sensor_id}/radiacion', [
        'uses' => 'ApiController@getSensorRadiacion',
        'as' => 'sensor.getradiacion'
    ]);
    Route::get('/sensors/{sensor_id}/humedad', [
        'uses' => 'ApiController@getSensorHumedad',
        'as' => 'sensor.gethumedad'
    ]);
    Route::get('/sensors/{sensor_id}/temperatura', [
        'uses' => 'ApiController@getSensorTemperatura',
        'as' => 'sensor.gettemperatura'
    ]);
    Route::get('/sensors/{sensor_id}/ocupado', [
        'uses' => 'ApiController@getSensorOcupado',
        'as' => 'sensor.getocupado'
    ]);
    Route::get('/sensors/{sensor_id}/viento', [
        'uses' => 'ApiController@getSensorViento',
        'as' => 'sensor.getviento'
    ]);

    Route::get('/kantxas', [
        'uses' => 'ApiController@getKantxas',
        'as' => 'kantxas.get'
    ]);
    Route::get('/kantxas/{id}', [
        'uses' => 'ApiController@getKantxa',
        'as' => 'kantxa.get'
    ]);
    Route::get('/kantxa/{name}', [
        'uses' => 'ApiController@getKantxaName',
        'as' => 'kantxa.getname'
    ]);