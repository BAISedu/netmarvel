<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BadmintonController extends Controller
{
    //
    public function index() {
        return view('badminton-home');
    }

    public function playerManagement() {
        return view('badminton-player-management');
    }

    public function createParticipant() {
        return view('badminton-create-participant');
    }
}
