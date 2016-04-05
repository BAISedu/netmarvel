<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class swim_xc_event extends Model
{
    protected $table = 'swim_xc_event';

    public function tournament_sport_venue() {
        return $this->belongsTo('app/tournament_sport_venue');
    }
}
