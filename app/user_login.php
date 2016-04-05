<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_login extends Model
{
    //
    protected $table = 'user_login';

    public function user() {
        return $this->belongsTo('app/user');
    }
}
