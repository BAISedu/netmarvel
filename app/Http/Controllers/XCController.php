<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class XCController extends Controller
{
    //
    public function index() {
        return view('crosscountry-home');
    }
    public function stats() {
        return view('crosscountry-stats');
    }
    
    public function player() {
        return view('crosscountry-player-management');
    }

    public function addEvent() {
        return view('crosscountry-add-event');   
    }
    public function selectEvent() {
        return view('crosscountry-select-event');
    }
    public function enterData() {
        return view('crosscountry-enter-data');
    }
}
