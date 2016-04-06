<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class team extends Model
{
<<<<<<< HEAD
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
=======
    protected $table = 'team';

    public function participating_school() {
        return $this->belongsTo('app/participating_school');
>>>>>>> ef129a5f35ea9b566280d091c04aa9b280695713
    }
}
