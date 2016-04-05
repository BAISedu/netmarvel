<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mvp extends Model
{
    //
    protected $table = 'mvp';

    public function user ()
        return $this->belongsTo('app/user');
    public function participating_school ()
        return $this->belongsTo('app/participating_school');
}
