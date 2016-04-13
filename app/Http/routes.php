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

Route::get('/bob/', 'BobController@index');

Route::get('/bob/teams/', function() {
    return view('bob-teams');
}); 

Route::get('/bob/stats/', function() {
    return view('bob-stats');
}); 

Route::get('/bob/bracket/', function() {
    return view('bob-bracket');
}); 

Route::get('/bob/playermanagement/', function() {
    return view('bob-playermanagement');
}); 

Route::get('/bob/create-participant/', function() {
    return view('bob-create-participant');
}); 

Route::get('/basketball/', function() {
    return view('basketball-home', ['year' => date('Y')]);
});

Route::get('/basketball/login', function() {
    return view('basketball-login');
});
Route::get('/basketball/schedule', function() {
    return view('basketball-schedule');
});

Route::get('/basketball/schedule/stats', function() {
    return view('basketball-schedule-stats');
});

Route::get('/basketball/player', function() {
    return view('basketball-player');
});

Route::get('/basketball/player/management', function() {
    return view('basketball-player-managment');
});

Route::get('/basketball/event/management', function() {
    return view('basketball-event-management');
});

Route::get('/basketball/event/create', function() {
    return view('basketball-event-create');
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

Route::get('/soccer/schedule/', function() {
    return view('soccer-schedule');
});

Route::get('/soccer/statistics/', function() {
    return view('soccer-statistics');
});

Route::match(['get', 'post'], '/soccer/previousIISSACs/', function() {
    return view('soccer-previous-IISSACs');
});

Route::get('/soccer/previousIISSACs/year/', function() {
    return view('soccer-previous-IISSACs-year');
});
Route::get('/soccer/previousIISSACs/year/', function() {
    return view('soccer-previous-IISSACs-year');
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

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
