<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class school extends Model
{
    //
    protected $table = 'school';

    public function participating_school() {
        return $this->hasMany('app/participating_school');
    }
    public function user() {
        return $this->hasMany('app/user');
    }
}
