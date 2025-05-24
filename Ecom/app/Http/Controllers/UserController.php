<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('User.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('User.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
             'firstName'=>'required',
              'lastName'=>'required',
            'email'=>'required|unique:users',
            'phone'=>'required|max:10|min:10',
            'password'=>'required|min:8',
        ]);
        $res=DB::table('users')->insert([
            'username'=>$request['firstName'].",".$request['lastName'],
            'email'=>$request['email'],
            'phone'=>$request['phone'],
            'password'=>$request['password'],
            'created_at'=>date("Y-m-d H:i:s"),
            'updated_at'=>date("Y-m-d H:i:s")
        ]);

        if($res){
            return redirect()->route('user.create')->with('success', 'Item successfully created!');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        echo "<pre>";
        echo $id;
        print_r(session()->all());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
         echo "edit method called";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function login(Request $request){
        $phone= $request['phone'];
        $password=$request['password'];

        $user = DB::table('users')->where(['phone'=>$phone,"password"=>$password])->first();

       if($user){
         $request->session('user',$user->uid);
        $sessionData = session()->all();
        $session_log=[
           
            'uid'=>$user->uid,
            'ip'=>$request->ip(),
            'createAt'=>date('Y:m:d H:i:s')

        ];
        $res= DB::table('user_session')->insert($session_log);
        if($res){
             return redirect()->route('user.show',$user->uid)->with('success', 'Login SuccessFully');
        }
        
       }
        
    }
}
