<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function AdminLogin(){
        return view('admin.login');
    }
    // End Method

    public function AdminDashboard(){
        return view('admin.admin_dashboard');
    }
    // End Method

    public function AdminLoginSubmit(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $check = $request->all();

        $data = [
            'email' => $check['email'],
            'password' => $check['password']
        ];

        if(Auth::guard('admin')->attempt($data)){
            return redirect()->route('admin.dashboard')->with('success',
            'Login Successfully');
        }else{
            return redirect()->route('admin.login')->with('error',
            'Invalid Credentials');
        }
    }
    //End Method

    public function AdminLogout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login')->with('success',
        'Logout Successfully');
    }
    //End Method
}
