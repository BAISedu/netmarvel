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
}
