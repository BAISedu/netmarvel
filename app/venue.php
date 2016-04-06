<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class venue extends Model
{
    //
    protected $table = 'venue';

    public function tournament_sport_venue() {
        return $this->hasMany('app/tournament_sport_venue');
    }
}
