<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class overall_score extends Model
{
    protected $table = 'school';

    public function xc_event_data() {
        return $this->belongsTo('app/overall_score');
    }
    public function venue() {
        return $this->belongsTo('app/overall_score');
    }
}
