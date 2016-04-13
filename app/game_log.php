<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class game_log extends Model
{
    //
    protected $table = 'game_log';

    public function game() {
        return $this->hasMany('game');
    }

    public function user() {
        return $this->hasMany('user');
    }


}
