<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function store(Request $request){

        
        $username = $request->input('username');

        if($user = User::where('username', $username)->first()){
            
            return view('register', ["error" => 1]);
            
        }else{
            
            $user = new User();
            
            $user->username = $username;
            
            $user->save();

            return view('index', ["success" => 1]);

        }
        

    }

    public function start(Request $request){

        $username = $request->input('username');

        if($user = User::where('username', $username)->first()){
            
            return view('home', ['id' => $user->id, 'user' => $user->username]);

        }else{

            return view('signin', ['error' => 1]);

        }
 

    }

}