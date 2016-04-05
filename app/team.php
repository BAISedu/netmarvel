<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    protected $table = 'team';

    public function badminton_team_user_seed() {
        return $this->hasMany('app\badminton_team_user_seed');
    }
    public function participating_school() {
        return $this->belongsTo('app\participating_school');
    }
    public function game(){
        return $this->hasMany('app\game');
    }
}
