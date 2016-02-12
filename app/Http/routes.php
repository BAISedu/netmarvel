<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/bob/', function() {
    return view('bob-home');
}); 

Route::get('/basketball/', function() {
    return view('basketball-home', ['year' => date('Y')]);
}); 

Route::get('/soccer/', function() {
    return view('soccer-home');
});

Route::get('/soccer/login/', function() {
    return view('soccer-login');
});

Route::get('/soccer/homepage/', function() {
    return view('soccer-homepage');
});

Route::get('/badminton/', function () {
    return view('badminton-home');
});

Route::get('/badminton/player-management/', function () {
    return view('badminton-player-management');
});

Route::get('/swim/', function () {
    return view('swim-home');
});

Route::get('/swim/event-detail/', function () {
    return view('swim-event-detail');
});

Route::get('/cross-country/', function () {
    return view('crosscountry-home');
});

Route::get('/cross-country/stats/', function () {
    return view('crosscountry-stats');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
