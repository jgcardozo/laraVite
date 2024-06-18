<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class PassportAuthController extends Controller
{

 /*    public function users(Request $request)
    {
        $users = User::all();
        return response()->json(compact('users'), 200);
    } */

    public function register(Request $request)
    {

        
        $request->validate([
            "name" => "required|string",
            "email" => "required|string|email|unique:users",
            "password" => "required|string" //,'confirmed', Password::defaults
        ]);

        //return response()->json(["message" => $request->all()]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        //$token = $user->createToken($request->email)->accessToken;
        return response()->json(["message" => "user registered"]); //, "token" => $token
    }//register


    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (!auth()->attempt($credentials)) {
            return response()->json(['error', 'Your email or password does not match our records'], 400);
        }
        $token = auth()->user()->createToken($request->email)->accessToken;
        return response()->json(['token' => $token], 200);
    }//login


    public function logout(Request $request)
    {
        $token = auth()->user()->token();
        $token->revoke();
        return response()->json(['success', 'Logout Successfully'], 201);
    } //logOut





}//class
