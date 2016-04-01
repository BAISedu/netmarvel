<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class school extends Model
{
    //
    protected $table = 'school';

    public function user() {
        return $this->hasMany('app/user');
    }
}
