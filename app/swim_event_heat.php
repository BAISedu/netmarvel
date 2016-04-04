<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class swim_event_heat extends Model
{
    //
    protected $table = 'swim_event_heat';

    public function swim_xc_events() {
        return $this->hasMany('app/swim_xc_event');
    }

    public function user() {
        return $this->hasMany('app/user.php');
    }
    public function record() {
        return $this->hasMany('app/record');
    } 
}
