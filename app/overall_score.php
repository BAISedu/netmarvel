<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class overall_score extends Model
{
    protected $table = 'overall_score';

    public function participating_school () {
        return $this->belongsTo('app/participating_school');
    }
}
