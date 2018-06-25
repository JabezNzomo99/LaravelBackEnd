<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Gyms;

class Instructors extends Model
{
    //
    protected $fillable=[
        'GymId','FirstName','LastName','PhoneNumber', 'Email','Gender','PhotoURL'
    ];
    public function gym(){
        return $this->belongsTo('App\Gyms','GymId','id');
    }
}
