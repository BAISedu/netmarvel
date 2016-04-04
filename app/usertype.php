<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usertype extends Model
{
    //
    protected $table = 'usertype';

    public function user()
        return $this->hasMany('app/user');
}
