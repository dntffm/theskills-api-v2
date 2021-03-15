<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Subcourse extends Model{
    public function course(){
        return $this->belongsTo('App\Course');
    }
}