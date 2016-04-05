<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tournament_sport_venue extends Model
{
    protected $table = 'tournament_sport_venue';

    public function tournament() {
        return $this->belongTo('app/tournament');
    }
    public function sport() {
        return $this->belongTo('app/sport');
    }
    public function participating_school() {
        return $this->hasMany('app/participating_school');
    }
    public function venue() {
        return $this->belongTo('app/venue');
    }
    public function swim_xc_event() {
        return $this->hasMany('app/swim_xc_event');
    }
}
