<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SoccerController extends Controller
{
    public function index() {
        return view('soccer');
    }
    public function login() {
        return view('soccer-login');
    }
    public function homepage() {
        return view('soccer-homepage');
    }
    public function schedule() {
        return view('soccer-schedule');
    }
    public function statistics() {
        return view('soccer-statistics');
    }
}
