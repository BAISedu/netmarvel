<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BasketballController extends Controller
{
    public function index (){
        return view('basketball-home', ['year' => date('Y')]);
    }
    
    public function login (){ 
        return view('basketball-login');
    }

    public function schedule (){
         return view('basketball-schedule');
    }

    public function scheduleStats(){
         return view('basketball-schedule-stats');
    }
    
    public function player (){
        return view('basketball-player');
    }
    
    public function playerManagment (){
        return view('basketball-player-managment');
    }
    
    public function eventManagement (){
        return view('basketball-event-management');
    }

    public function create (){
        return view('basketball-event-create');
    }

}
