<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class overall_score extends Model
{
    protected $table = 'school';

    public function xc_event_data() {
        return $this->belongsTo('app\xc_event_data');
    }

    public function participating_school () {
        return $this->belongsTo('app\participating_school');
    }
}
