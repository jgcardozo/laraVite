<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function loginView(){
        return view('admin.login');
    }

    public function login(Request $request){
        $request->validate([
            'email'=> 'required|email',
            'password'=> 'required'
        ]);

        $credentials = $request->only('email','password');      
        if(Auth::attempt($credentials)){
            return redirect()->route('admin.dashboard');
        }
        return Redirect::action([AdminController::class,'login']);
    }


    public function logout(){  
        Auth::logout();
        return redirect()->route('admin.login');
    }


}
