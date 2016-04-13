<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tournament extends Model
{
    //
    protected $table = 'tournament';

    public function user() {
        return $this->hasmany('app\tournament_sport_venue');
    }
}
