<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class soccer_user_stat extends Model
{
    //
    protected $table = 'soccer_user_stat';

    public function user() {
        return $this->belongsTo('app/user');
    }
    public function game() {
        return $this->belongsTo('app/game');
    }
}
