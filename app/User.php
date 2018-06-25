<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'FirstName','LastName','UserName', 'email', 'password','Home','PhoneNumber','Age','Gender','Weight','TargetWeight'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public function WorkOutSessions(){
        return $this->hasMany('App\WorkOutSessions','user_id','id');
    }

    protected $hidden = [
        'password', 'remember_token',
    ];
}
