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

Route::get('/bob/teams/', function() {
    return view('bob-teams');
}); 

Route::get('/bob/stats/', function() {
    return view('bob-stats');
}); 

Route::get('/basketball/', function() {
    return view('basketball-home', ['year' => date('Y')]);
});

Route::get('/basketball/schedule', function() {
    return view('basketball-schedule');
});

Route::get('/basketball/player', function() {
    return view('basketball-player');
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

Route::get('/soccer/playermanagement/BAISboys/', function() {
    return view('soccer-playermanagement-BAISboys');
});

Route::get('/soccer/playermanagement/BAISboys/AddPlayers/', function() {
    return view('soccer-playermanagement-BAISboys-AddPlayers');
});

Route::get('/soccer/playermanagement/BAISboys/Save/', function() {
    return view('soccer-playermanagement-BAISboys-Save');
});

Route::get('/soccer/playermanagement/BAISgirls/', function() {
    return view('soccer-playermanagement-BAISgirls');
});

Route::get('/badminton/', function () {
    return view('badminton-home');
});

Route::get('/badminton/player-management/', function () {
    return view('badminton-player-management');
});

Route::get('/badminton/create-participant/', function () {
    return view('badminton-create-participant');
});

Route::get('/swim/', function () {
    return view('swim-home');
});

Route::get('/swim/event-detail/', function () {
    return view('swim-event-detail');
});

Route::get('/swim/add-program/', function () {
    return view('swim-add-program');
});

Route::get('/swim/add-event/', function () {
    return view('swim-add-event');
});

Route::get('/cross-country/', function () {
    return view('crosscountry-home');
});

Route::get('/cross-country/stats/', function () {
    return view('crosscountry-stats');
});

Route::get('/cross-country/player-management/', function () {
    return view('crosscountry-player-management');
});

Route::get('/cross-country/add-event/', function () {
    return view('crosscountry-add-event');
});

Route::get('/cross-country/select-event/', function () {
    return view('crosscountry-select-event');
});


Route::get('/cross-country/enter-data/', function () {
    return view('crosscountry-enter-data');
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
