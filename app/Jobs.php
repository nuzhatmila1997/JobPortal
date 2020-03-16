<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    //
    function user() {
        return $this->belongsTo("App\User");
    }

    function applications() {
    	return $this->hasMany('App\JobApplication');
    }

}
