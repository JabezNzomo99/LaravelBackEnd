<?php

namespace App\Http\Controllers;

use App\User;
use Validator;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $success_status=200;
    public $error_status=401;
    public function login(){
        if(Auth::attempt(['UserName'=>request('UserName'),'password'=>request('password')])){
            $user=Auth::user();
            $success['token']=$user->createToken('MyApp')->accessToken;
            return response()->json(['response'=>$success],$this->success_status);
        }
        else{
            return response()->json(['error'=>'Unauthorised'],401);
        }
    }
    public function register(Request $request){

        $validator=Validator::make($request->all(),[
            'FirstName'=>'required',
            'LastName'=>'required',
            'UserName'=>'required',
            'email'=>'required|email',
            'password'=>'required',
        ]);
        if($validator->fails()){
            return response()->json(['error'=>$validator->errors()],401);
        }
        $input=$request->all();
        $input['password']=bcrypt($input['password']);
        $user=User::create($input);
        $success['token']=$user->createToken('MyApp')->accessToken;
        $success['FirstName']=$user->FirstName;
        return response()->json(['response'=>$user],$this->success_status);

    }
    public function details(){
        $user=Auth::user();
        return response()->json(['response'=>$user,$this->success_status]);
    }

    public function index()
    {
        //
        $users=User::all();
        return UserResource::collection($users);
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
        $user=new User();
        $user->FirstName=$request->input("FirstName");
        $user->LastName=$request->input("LastName");
        $user->email=$request->input("email");
        $user->password=$request->input("password");
        $user->save();

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
    public function edit(Request $request)
    {
        //
        $user=User::findorfail($request->input("user_id"));
        $user->FirstName=$request->input("FirstName");
        $user->LastName=$request->input("LastName");
        $user->email=$request->input("email");
        $user->UserName=$request->input("UserName");
        $user->Home=$request->input("Home");
        $user->PhoneNumber=$request->input("PhoneNumber");
        $user->Age=$request->input("Age");
        $user->Gender=$request->input("Gender");
        $user->Weight=$request->input("Weight");
        $user->TargetWeight=$request->input("TargetWeight");
        if($user->save()){
            return response()->json(['response'=>'User Profile Saved'],$this->success_status);
        }else{
            return response()->json(['response'=>'An error occurred'],$this->error_status);
        }

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
