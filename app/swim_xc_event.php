<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class swim_xc_event extends Model
{
    //
    protected $table = 'swim_xc_event';

    public function swim_event_heat() {
        return $this->hasMany('app\swim_event_heat');
    }

    public function tournament_sport_venue() {
        return $this->belongsTo('app\tournament_sport_venue');
    }
    public function xc_event_data() {
        return $this->hasMany('app\xc_event_data');_
    }
}
