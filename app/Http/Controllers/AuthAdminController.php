<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;

class AuthAdminController extends Controller
{
    //Funsi Auth untuk Admin

protected function guard(){
    return Auth::guard('admin');
}

    public function getLoginAdmin(){
        return view('loginAdmin');
    }

    public function postLoginAdmin(Request $request){
        if(Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password])){
            $admin = Admin::all();
            // dd($admin);
            return redirect()->route('adminhome');
        };

        return redirect()->back()->with('status', 'Your password or username is incorrect');
    }

    // public function home(Request $request, $id){
    //     $admin = $request->session()->get('admin', function(){
    //         return view('layout.admin', compact('admin'));
    //     });
    // }
    
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

        // Baris kode ini diganti karena hanya super admin (Admin yg telah login) yang dapat membuat akun admin baru jadi credential untuk login berdasarkan admin yang telah berhasil di daftarkan tidak diperlukan
        // Auth::guard('admin')->loginUsingId($admin->id);

        return redirect()->route('adminhome')->with('status', 'New account has been created');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('loginadmin');
    }
}
