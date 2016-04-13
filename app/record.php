<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class record extends Model
{
    //
  protected $table = 'record';

    public function swim_event_heat() {
        return $this->belongsTo('swim_event_heat');
    }
    public function user() {
        return $this->belongsTo('app\user.php');
    } 
}
