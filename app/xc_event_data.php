<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class xc_event_data extends Model
{
    //
    protected $table = 'xc_event_data';

    public function user() {
        return $this->belongsTo('app\user');
    }
    public function overall_score() {
        return $this->hasMany('app\overall_score');
    }
    public function swim_xc_event() {
        return $this->belongsTo('app\swim_xc_event');
    }
}
