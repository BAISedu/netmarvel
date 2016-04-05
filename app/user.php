<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    //
    protected $table = 'user';

    public function usertype() {
        return $this->belongsTo('app/usertype');
    }
    public function bb_user_stat() {
        return $this->hasMany('app/bb_user_stat');
    }
    public function game_log(); {
        return $this->hasMany('app/game_log');
    }
    public function soccer_user_stat(); {
        return $this->hasMany('app/soccer_user_stat');
    }
    public function mvp(); {
        return $this->hasMany('app/mvp');
    }
    public function bob_user_stat(); {
        return $this->hasMany('app/bob_user_stat');
    }
    public function school(); {
        return $this->belongsTo('app/school');
    }
    public function badminton_team_user_seed(); {
        return $this->hasMany('app/badminton_team_user_seed');
    }
    public function swim_event_heat(); {
        return $this->hasMany('app/swim_event_heat');
    }
    public function xc_event_data(); {
        return $this->hasMany('app/xc_event-data');
    }
    

}
