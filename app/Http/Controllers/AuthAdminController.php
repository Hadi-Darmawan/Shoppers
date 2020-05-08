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
        $this->validate($request,[
            'Username' => 'required|alpha_dash',
            'Password' => 'required|alpha_dash'
        ]);

        if(Auth::guard('admin')->attempt(['username' => $request->Username, 'password' => $request->Password])){
            // $admin = Admin::all();
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
            'Nama' => 'required|min:2|max:50|not_regex:/[^A-Z a-z]/',
            'Username' => 'required|unique:admins|alpha_dash',
            'Phone' => 'required|numeric|digits_between:12,13',
            'Profile' => 'required|file|filled',
            'password' => 'required|min:6|max:24|alpha_dash|confirmed'
        ]);

        $profile = $request->file('Profile')->store('profile_image');

        Admin::create([
            'name' => $request->Nama,
            'username' => $request->Username,
            'profile_image' => $profile,
            'phone' => $request->Phone,
            'password' => bcrypt($request->password),
        ]);

        // Baris kode ini diganti karena hanya super admin (Admin yg telah login) yang dapat membuat akun admin baru jadi credential untuk login berdasarkan admin yang telah berhasil di daftarkan tidak diperlukan
        // Auth::guard('admin')->loginUsingId($admin->id);

        return redirect()->route('adminhome')->with('status', 'New account has been created');
    }

    public function getEditProfileAdmin(Request $request){
        Auth::guard('admin')->loginUsingId($request->id);
        return view('profileAdmin');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('loginadmin');
    }
}
