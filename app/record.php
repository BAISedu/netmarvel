<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class record extends Model
{
    //
  protected $table = 'record';

    public function swim_event_heat() {
        return $this->hasMany('swim_event_heat');
    }
    public function user() {
        return $this->hasMany('app/user.php');
    } 
}
