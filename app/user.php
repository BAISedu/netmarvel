<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $table = 'user';

    public function school() {
        return $this->belongsTo('app/school');
    }
}
