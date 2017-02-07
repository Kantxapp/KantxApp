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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

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
    Route::get('/kantxas', [
        'uses' => 'KantxasController@index',
        'as' => 'kantxas'
    ]);
    Route::get('/events', [
        'uses' => 'GmapsController@index',
        'as' => 'events'
    ]); 
    

    Route::get('/kantxa/zubipe', function () {
        return view('kantxas.kantxa');
    });


    
});