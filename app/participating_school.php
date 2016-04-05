<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class participating_school extends Model
{
    protected $table = 'participating_school';

    public function tournament_sport_venue() {
        return $this->belongTo('app/tournament_sport_venue')
    }
    public function team() {
        return $this->hasMany('app/team');
    }
}
