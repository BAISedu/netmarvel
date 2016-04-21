<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BobController extends Controller
{

    public function index() {
        // Look up information from database using the model
        // send the information to the view
        return view('bob-home');
    }
    public function teams() {
        return view('bob-teams');
    }

    public function stats() {
        return view('bob-stats');
    }

    public function bracket() {
        return view('bob-bracket');
    }
    
    public function playerManagement () {
        return view('bob-playermanagement');
    }

    public function createParticipant () {
        return view('bob-create-participant');
    }


}
