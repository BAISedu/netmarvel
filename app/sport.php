<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sport extends Model
{
    //
    protected $table = 'sport';

    public function tournament_sport_venue() {
        return $this->hasMany('app/tournament_sport_venue');
    }
}
