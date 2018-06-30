<?php

namespace App\Http\Controllers;


use App\Http\Resources\WorkOutResource;
use App\User;
use App\WorkOutSessions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorkOutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $success_status=200;
    public function index()
    {
        //
        $workout=WorkOutSessions::all();
        return WorkOutResource::collection($workout);

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
        $workout=new WorkOutSessions();
        $workout->user_id=$request->input('user_id');
        $workout->date=$request->input('date');
        $workout->location=$request->input('location');
        $workout->exercise_name=$request->input('exercise_name');
        $workout->reps=$request->input('reps');
        $workout->sets=$request->input('sets');
        $user=User::findorfail($request->input('user_id'));
        $user->WorkOutSessions()->save($workout);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
        $workout=DB::table('work_out_sessions')->where('user_id',$request->input('user_id'))->get();
        return response()->json(['response'=>$workout,$this->success_status]);
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
