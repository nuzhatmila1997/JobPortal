<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    //
    protected $table='job_application';
    protected $fillable=['user_id','job_id','fname','lname','phone','address','resume'];
    
    function user()
    {
    	return $this->belongsTo('App\User','user_id');
    }
}
