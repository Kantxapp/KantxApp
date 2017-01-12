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

Route::get('settings/account', 'AccountsController@edit');
Route::patch('settings/account', 'AccountsController@update');

Route::post('/contacto', 'ContactController@sendContact');

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
    Route::post('/profile/update/profile', [
        'uses' => 'ProfilesController@update',
        'as' => 'profile.update'
    ]);
    // Route::get('/check_relationship_status/{id}', [
    //     'uses' => 'FriendshipsController@check',
    //     'as' => 'check'
    // ]);
    // Route::get('/add_friend/{id}', [
    //     'uses' => 'FriendshipsController@add_friend',
    //     'as' => 'add_friend'
    // ]);
    // Route::get('/accept_friend/{id}', [
    //     'uses' => 'FriendshipsController@accept_friend',
    //     'as' => 'accept_friend'
    // ]);
    // Route::get('get_unread', function(){
    //     return Auth::user()->unreadNotifications;
    // });
    // Route::get('/notifications', [
    //     'uses' => 'HomeController@notifications',
    //     'as' => 'notifications'
    // ]);
    // Route::get('/feed', [
    //     'uses' => 'FeedsController@feed',
    //     'as' => 'feed'
    // ]);
    // Route::post('/create/post', [
    //     'uses' => 'PostsController@store'
    // ]);
    // Route::get('/get_auth_user_data', function(){
    //     return Auth::user();
    // });
    // Route::get('/like/{id}', [
    //     'uses' => 'LikesController@like'
    // ]);
    // Route::get('/unlike/{id}', [
    //     'uses' => 'LikesController@unlike'
    // ]);
});