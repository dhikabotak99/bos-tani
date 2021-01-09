<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Models;
use App\Http\Models\User;

class authController extends Controller
{
    public function login(){
        return view('login');
    }

    public function postLogin(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/');
        }
        return redirect('/login');
    }

    public function register(){
        return view('register');
    }

    public function formRegister(Request $request){
        $users = new User;
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = bcrypt($request->passowrd);
        $users->save();

        return redirect('/login');
    }
}
