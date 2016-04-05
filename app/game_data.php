<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class game_data extends Model
{
    //
    protected $table = 'game_data';

    public function game() {
        return $this->belongsTo('game');
    }

}
