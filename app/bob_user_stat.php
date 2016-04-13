<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bob_user_stat extends Model
{
    //
    protected $table = 'bob_user_stat';

    public function game () {
        return $this->belongsTo('app\game');
    }
    public function user() {
        return $this->belongsTo('app\user');
    }
}
