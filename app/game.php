<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class game extends Model
{
    //
    protected $table = 'game';

    public function game_data() {
        return $this->hasMany('game_data');
    }

    public function team_1() {
        return $this->belongsTo('app/team', 'id', 'team_1');
    }
    public function team_2() {
        return $this->belongsTo('app/team', 'id', 'team_2');
    }
    public function winner() {
        return $this->belongsTo('app/team', 'id', 'winner');
    }
}
