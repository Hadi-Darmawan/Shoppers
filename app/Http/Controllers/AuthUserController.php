<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class AuthUserController extends Controller
{
    //Funsi Auth untuk User
    public function getLoginUser(){
        return view('loginUser');
    }

    public function postLoginUser(Request $request){
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->route('userhome');
        }
        return redirect()->back()->with('status', 'Your password or username is incorrect');
    }

    public function getRegisterUser(){
        return view('registerUser');
    }

    public function postRegisterUser(Request $request){
        $this->validate($request, [
            'name' => 'required|min:2|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:24|confirmed'
        ]);

        $profile = $request->file('profile_image')->store('profile_image');

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'profile_image' => $profile,
            'status' => $request->status,
            'password' => bcrypt($request->password)
        ]);

        Auth::guard()->loginUsingId($user->id);

        return redirect()->route('userhome');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('welcome');
    }
}
