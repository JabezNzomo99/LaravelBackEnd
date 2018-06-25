<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkOutSessions extends Model
{
    //
    public function User(){
        return $this->belongsTo('App\User','user_id','id');

    }

}
