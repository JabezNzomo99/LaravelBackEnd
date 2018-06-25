<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Instructors;

class Gyms extends Model
{
    //
    protected $fillable=[
        'Latitude','Longitude','GymName','Rating','PhoneNumber','Open','Close'
    ];

    public function instructors(){
        return $this->hasMany('App\Instructors','GymId','id');
    }
}
