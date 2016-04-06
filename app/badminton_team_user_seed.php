<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class badminton_team_user_seed extends Model
{
    //underlying MySql table
    protected $table = 'badminton_team_user_seed';

    public function team() {
        return $this->belongsTo('app\team');
    }
    public function user() {
        return $this->belongsTo('app\user');
    }
}
