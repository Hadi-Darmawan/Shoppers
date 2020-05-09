<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class AuthUserController extends Controller
{
    //Funsi Auth untuk User
    public function getLoginUser(){
        return view('auth_user/loginUser');
    }

    public function postLoginUser(Request $request){
        $this->validate($request,[
            'Email' => 'required|email',
            'Password' => 'required|alpha_dash'
        ]);

        if(Auth::attempt(['email' => $request->Email, 'password' => $request->Password])){
            return redirect()->route('userhome');
        }
        return redirect()->back()->with('status', 'Your password or username is incorrect');
    }

    public function getRegisterUser(){
        return view('auth_user/registerUser');
    }

    public function postRegisterUser(Request $request){
        $this->validate($request, [
            'Nama' => 'required|min:2|max:50|not_regex:/[^A-Z a-z]/',
            'Email' => 'required|unique:users',
            'Profile' => 'required|file|filled',
            'password' => 'required|min:6|max:24|alpha_dash|confirmed'
        ]);

        $profile = $request->file('Profile')->store('profile_image');

        $user = User::create([
            'name' => $request->Nama,
            'email' => $request->Email,
            'profile_image' => $profile,
            'status' => $request->status,
            'password' => bcrypt($request->password)
        ]);

        Auth::guard()->loginUsingId($user->id);

        return redirect()->route('userhome');
    }

    public function getEditProfileUser(Request $request){
        Auth::guard()->loginUsingId($request->id);
        return view('auth_user/profileUser');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('userhome');
    }
}
