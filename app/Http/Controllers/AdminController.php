<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function adminLoginForm(){
        return view('backend.auth.login');
    }

    public function adminLogin(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect('/admin/dashboard')->with('success', 'Login Successfully!');
        }else{
            // Session::flash('error-msg','Invalid Email or Password');
            return redirect()->back()->with('error', 'Login Failed!');
        }
    }

    public function adminRegisterForm(){
        return view('backend.auth.register');
    }

    public function adminRegister(Request $request)
    {
        $request->validate([
 
            'email' => 'required|email|unique:admins',

            'password' => 'required|min:8',
        ]);
    
        // Create a new admin
        $admin = new Admin();

        $admin->email = $request->input('email');

        $admin->password = Hash::make($request->input('password'));
    
        // Save the admin to the database
        $admin->save();
    
        // You can add any additional logic here, like sending a welcome email, etc.
    
        return response()->json(['message' => 'Admin registered successfully'], 201);
    }
    

    // public function adminLogin(Request $request){
    //   dd($request);
    // }

    // public function adminLogin(Request $request){
    //     $request->validate([
    //         'email'=>'required',
    //         'password'=>'required',
    //     ]);

    //     if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password])){
    //         return redirect('/admin/dashboard')->with('success', 'Login Successfully!');
    //     }else{
    //         // Session::flash('error-msg','Invalid Email or Password');
    //         return redirect()->back()->with('error', 'Login Failed!');
    //     }
    // }

    public function adminDashboard(){
        return view('backend.index');
    }

    public function adminLogout(){
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }

}
