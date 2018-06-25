<?php

namespace App\Http\Controllers;

use App\Instructors;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Resources\InstructorResource;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public  $success_status=200;
    public $error_status=401;
    public function index()
    {
        //
        $instructors=Instructors::all();
        return InstructorResource::collection($instructors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $instructor=new Instructors();
        $instructor->FirstName=$request->input('FirstName');
        $instructor->LastName=$request->input('LastName');
        $instructor->GymId=$request->input('GymId');
        $instructor->PhoneNumber=$request->input('PhoneNumber');
        $instructor->Email=$request->input('Email');
        $instructor->Gender=$request->input('Gender');
        $instructor->PhotoURL=$request->input('PhotoURL');
        if($instructor->save()){
            return response()->json(['response'=>'Instructor has been added to the Gym Network successfully'],$this->success_status);
        }
        else{
            return response()->json(['response'=>'An error occurred'],$this->error_status);

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
