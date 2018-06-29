<?php

namespace App\Http\Controllers;

use App\Gyms;
use App\Http\Resources\GymResource;
use App\User;
use Illuminate\Http\Request;

class GymController extends Controller
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
        $gyms=Gyms::all();
        return GymResource::collection($gyms);
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
        $gym=new Gyms();
        $gym->Latitude=$request->input('Latitude');
        $gym->Longitude=$request->input('Longitude');
        $gym->GymName=$request->input('GymName');
        $gym->Rating=$request->input('Rating');
        $gym->PhoneNumber=$request->input('PhoneNumber');
        $gym->Open=$request->input('Open');
        $gym->Close=$request->input('Close');
        $gym->save();

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
        $gym=Gyms::findorfail($id);
        return response()->json(['Gym'=>$gym],$this->success_status);



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
