<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
class AuthController extends Controller
{
    public function login(Request $request){
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            $user = Auth::user();
            $userTokenResult = $user->createToken('My Token');
            $token = $userTokenResult->accessToken;
            return response()->json(['success'=>true,'accessToken'=>$token,'message'=>'successful']);
        }else{
            return response()->json(['success'=>false,'message'=>'successfully failed']);
        }

    }

    public function register(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required'
        ]);
        $name = $request->name;
        $email = $request->email;
        $password = Hash::make($request->password);
        $user = User::create(['name'=>$name,'email'=>$email,'password'=>$password]);
        return $user;
    }
}
