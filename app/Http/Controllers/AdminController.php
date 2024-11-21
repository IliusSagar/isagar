<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Learning;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

    // Learning Management
    public function manageLearning(){
        $all_data = DB::table('learnings')->orderBy('id', 'desc')->paginate(5);
$totalCount = $all_data->total();       // Total number of records


return view('backend.learning_management.manage', compact('all_data', 'totalCount'));

    }

    public function storeManageLearning(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required',
        ]);
    
        $data = new Learning();

        $data->title = $request->title;
        $data->slug = $request->slug;
        $data->description = $request->description;

        $data->save();
    
        return redirect()->back()->with('success', 'Learning Management Successfully Added!');
    }

    public function deleteManageLearning($id)
    {
        // Find the category by ID
        $data = Learning::findOrFail($id);
        
       
        // Delete the category
        $data->delete();
    
        return redirect()->back()->with('success', 'Learning Management Successfully Deleted');
    }

    public function bulkDeleteManageLearning(Request $request)
    {
        // Validate that at least one item is selected
        $request->validate([
            'items' => 'required|array|min:1',
            'items.*' => 'exists:learnings,id', // Ensure all item IDs exist in the learning table
        ]);
    
        // Delete the selected items from the Learning model
        Learning::whereIn('id', $request->items)->delete();
    
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Learning Management Selected Deleted Successfully.');
    }


    public function viewPageManageLearning(){
        $all_data = DB::table('learnings')->orderBy('id', 'desc')->paginate(12);
$totalCount = $all_data->total();       // Total number of records


return view('backend.learning_management.view_page', compact('all_data', 'totalCount'));

    }

    public function viewanageLearning($id)
    {
        // Find the category by ID
        $data = Learning::findOrFail($id);
        
    
        return view('backend.learning_management.view_page_details', compact('data'));
    }

    public function searchManageLearning(Request $request)
    {
        $query = $request->input('query');
        $learn = Learning::where('title', 'LIKE', "%{$query}%")->get();
    
        return response()->json($learn);
    }

}
