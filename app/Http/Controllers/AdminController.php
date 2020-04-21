<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function getEditProfileAdmin(Request $request){
        Auth::guard('admin')->loginUsingId($request->id);
        return view('profileAdmin');
    }
}
