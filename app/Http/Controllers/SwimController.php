<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SwimController extends Controller
{
    /**
     *
     *
     *
     * @retrun Response
     */
    public function home() {
        return view('swim-home');
    }

    public function eventDetail() {
        return view('swim-event-detail');
    }

}
