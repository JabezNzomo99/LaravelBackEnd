<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkOutSessions extends Model
{
    //
    protected $fillable=['user_id','date','location','exercise_name','reps','sets'];
    public function User(){
        return $this->belongsTo('App\User','user_id','id');

    }

}
