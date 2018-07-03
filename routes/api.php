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


Route::post('/Login','UserController@login');
Route::post('/Register','UserController@register');
Route::get('/ShowUsers','UserController@index');
Route::post('/AddInstructor','InstructorController@store');
Route::post('/DeleteInstructor/{id}','InstructorController@destroy');
Route::post('/AddGym','GymController@store');
Route::post('/AddWorkOut','WorkOutController@store');
Route::post('/AllWorkOuts','WorkOutController@index');
Route::group(['middleware' => 'auth:api'], function(){
    Route::post('UserDetails', 'UserController@details');
    Route::get('/Instructors','InstructorController@index');

    Route::post('/ShowWorkouts','WorkOutController@show');
    Route::post('/ShowGyms','GymController@index');

});
