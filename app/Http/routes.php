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

Route::get('/bob/teams/', 'BobController@teams');

Route::get('/bob/stats/', 'BobController@stats'); 

Route::get('/bob/bracket/', 'BobController@bracket'); 

Route::get('/bob/playermanagement/', 'BobController@playerManagement'); 

Route::get('/bob/create-participant/', 'BobController@createPlayer');

Route::get('/basketball/', 'BasketballController@index');

Route::get('/basketball/login','BasketballController@login'); 

Route::get('/basketball/schedule', 'BasketballController@schedule'); 

Route::get('/basketball/schedule/stats', 'BasketballController@scheduleStats'); 

Route::get('/basketball/player', 'BasketballController@player');

Route::get('/basketball/player/management', 'BasketballController@playerManagement');

Route::get('/basketball/event/management', 'BasketballController@eventManagement');

Route::get('/basketball/event/create', 'BasketballController@create'); 

Route::get('/soccer/', 'SoccerController@index');

Route::get('/soccer/login/', 'SoccerController@login');

Route::get('/soccer/homepage/', 'SoccerController@homepage');

Route::get('/soccer/playermanagement/BAISboys/', function () {
    return view('soccer-playermangement-BAISboys');
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

Route::get('/soccer/schedule/', 'SoccerController@schedule');

Route::get('/soccer/statistics/', 'SoccerController@statistics');

Route::match(['get', 'post'], '/soccer/previousIISSACs/', function() {
    return view('soccer-previous-IISSACs');
});

Route::get('/soccer/previousIISSACs/year/', function() {
    return view('soccer-previous-IISSACs-year');
});
Route::get('/soccer/previousIISSACs/year/', function() {
    return view('soccer-previous-IISSACs-year');
});

Route::get('/badminton/', 'BadmintonController@index');

Route::get('/badminton/player-management/', 'BadmninController@playerManagement');

Route::get('/badminton/create-participant/', 'BadmninController@createParticipant');

Route::get('/swim/', 'SwimController@home');

Route::get('/swim/event-detail/', function () {
    return view('swim-event-detail');
});
Route::get('/swim/event-detail/', 'SwimController@eventDetail');

Route::get('/swim/add-program/', function () {
    return view('swim-add-program');
});

Route::get('/swim/add-event/', function () {
    return view('swim-add-event');
});

Route::get('/cross-country/', 'XCController@index');

Route::get('/cross-country/stats/', 'XCController@stats');

Route::get('/cross-country/player-management/', 'XCController@player'); 
   
Route::get('/cross-country/add-event/', 'XCController@addEvent'); 
  
Route::get('/cross-country/select-event/', 'XCController@selectEvent');
 
Route::get('/cross-country/enter-data/', 'XCController@enterData');

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
