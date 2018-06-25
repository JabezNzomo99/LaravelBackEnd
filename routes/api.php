<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('/login','UserController@login');
Route::post('/register','UserController@register');
Route::get('/ShowUsers','UserController@index');
Route::post('/AddInstructor','InstructorController@store');
Route::post('/AddGym','GymController@store');
Route::group(['middleware' => 'auth:api'], function(){
    Route::post('UserDetails', 'UserController@details');
    Route::get('/Instructors','InstructorController@index');
    Route::post('/AddWorkOut','WorkOutController@store');
    Route::post('/ShowWorkouts','WorkOutController@index');
    Route::post('/ShowGyms','GymController@index');

});
