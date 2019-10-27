<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Command extends Model
{
    //
    public function posts(){
        return $this->hasOne('App\Post');
    }

    public function user(){
        return $this->hasOne('App\User');
    }
}
