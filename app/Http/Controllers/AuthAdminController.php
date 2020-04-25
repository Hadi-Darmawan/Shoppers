<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Illuminate\Support\Facades\Auth;

class AuthAdminController extends Controller
{
    //Funsi Auth untuk Admin
    public function getLoginAdmin(){
        return view('loginAdmin');
    }

    public function postLoginAdmin(Request $request){
        if(Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password])){
            return redirect()->route('adminhome');
        };

        return redirect()->back()->with('status', 'Your password or username is incorrect');
    }
    
    public function getRegisterAdmin(){
        return view('registerAdmin');
    }
    
    public function postRegisterAdmin(Request $request){
        $this->validate($request, [
            'name' => 'required|min:2|max:255',
            'username' => 'required|min:6|max:18|unique:admins',
            'password' => 'required|min:6|max:24|confirmed'
        ]);

        $profile = $request->file('profile_image')->store('profile_image');

        $admin = Admin::create([
            'name' => $request->name,
            'username' => $request->username,
            'profile_image' => $profile,
            'phone' => $request->phone,
            'password' => bcrypt($request->password),
        ]);

        // Auth::guard('admin')->loginUsingId($admin->id);

        return redirect()->route('adminhome')->with('status', 'New account has been created');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('welcome');
    }
}
