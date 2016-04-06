<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bb_user_stat extends Model
{
    protected $table = 'bb_user_stat';

    public function user() {
        return $this->belongsTo('app\user');
    }
    public function game() {
        return $this->belongsTo('app\game');
    }
}
