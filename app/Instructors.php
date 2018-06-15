<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instructors extends Model
{
    //
    protected $fillable=[
        'FirstName','LastName','PhoneNumber', 'Email','PhotoURL'
    ];
}
