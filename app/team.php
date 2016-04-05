<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    //
    protected $table = 'team';

    public function game_team_1() {
        $this->hasMany('app/game', 'team_1', 'id');
    }

    public function game_team_2() {
        $this->hasMany('app/game', 'team_2', 'id');
    }

    public function game_winner() {
        $this->hasMany('app/game', 'winner', 'id');
    }
}
