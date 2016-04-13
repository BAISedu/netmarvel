<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class participating_school extends Model
{
    protected $table = 'participating_school';

    public function tournament_sport_venue() {
        return $this->belongsTo('app\tournament_sport_venue')
    }
    public function team() {
        return $this->hasMany('app\team');
    }
    public function school () {
        return $this->belongsTo('app\school');
    }
    public function mvp () {
        return $this->hasMany('app\mvp');
    }
    public function overall_score () {
        return $this->hasMany('app\overall_score');
    }
    public function tournament () {
        return $this->hasManyThrough('app\tournament_sport_venue','app\tournament');
    }
    public function sport() {
        return $this->hasManyThrough('app\tournament_sport_venue','app\sport');
    }
    public function venue () {
        return $this->hasManyThrough('app\tournament_sport_venue','app\venue');
    }
}
