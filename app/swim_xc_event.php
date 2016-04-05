<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class swim_xc_event extends Model
{
    //
    protected $table = 'swim_xc_event';

    public function swim_event_heat() {
        return $this->hasMany('app\swim_event_heat');
    }
}
