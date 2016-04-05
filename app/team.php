<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class team extends Model
{
    protected $table = 'team';

    public function participating_school() {
        return $this->belongsTo('app/participating_school');
    }
}
