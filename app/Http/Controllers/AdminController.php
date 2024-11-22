<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Learning;
use App\Models\ManageCode;
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
        $data->status = $request->status;

        $data->save();
    
        return redirect()->back()->with('success', 'Learning Management Successfully Added!');
    }


    public function editManageLearning($id)
    {
        // Retrieve the specific record to edit
        $learning = DB::table('learnings')->find($id);
    
        if (!$learning) {
            return redirect()->back()->with('error', 'Learning record not found.');
        }
    
        // Fetch all paginated data for listing or reference
        $all_data = DB::table('learnings')->orderBy('id', 'desc')->paginate(5);
        $totalCount = $all_data->total(); // Total number of records
    
        return view('backend.learning_management.edit', compact('learning', 'all_data', 'totalCount'));
    }

    public function updateManageLearning(Request $request, $id)
    {
        // Validate the incoming data
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:learnings,slug,' . $id, // Allow unique slug except for the current record
            'description' => 'required|string',
        ]);
    
        // Retrieve the specific record
        $data = DB::table('learnings')->where('id', $id)->first();
    
        if (!$data) {
            return redirect()->back()->with('error', 'Learning record not found.');
        }
    
        // Update the record
        DB::table('learnings')->where('id', $id)->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'description' => $request->description,
            'status' => $request->status,
            'updated_at' => now(), // Assuming you have a timestamp column
        ]);
    
        return redirect()->back()->with('success', 'Learning Management Successfully Updated!');
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

     // Manage Code
     public function manageCode(){
        $all_data = DB::table('manage_codes')->orderBy('id', 'desc')->paginate(5);
$totalCount = $all_data->total();       


return view('backend.manage_code.manage', compact('all_data', 'totalCount'));

    }


    public function storeManageCode(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required',
          
        ]);
    
        $data = new ManageCode();

        $data->title = $request->title;
        $data->slug = $request->slug;
        $data->status = $request->status;

        $data->save();
    
        return redirect()->back()->with('success', 'Developer Code Successfully Added!');
    }

    public function deleteManageCode($id)
    {
        // Find the category by ID
        $data = ManageCode::findOrFail($id);
        
       
        // Delete the category
        $data->delete();
    
        return redirect()->back()->with('success', 'Developer Code Successfully Deleted');
    }

    public function bulkDeleteManageCode(Request $request)
    {
        // Validate that at least one item is selected
        $request->validate([
            'items' => 'required|array|min:1',
            'items.*' => 'exists:manage_codes,id', // Ensure all item IDs exist in the learning table
        ]);
    
        // Delete the selected items from the Learning model
        ManageCode::whereIn('id', $request->items)->delete();
    
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Developer Code Selected Deleted Successfully.');
    }

    public function editManageCode($id)
    {
        // Retrieve the specific record to edit
        $learning = DB::table('manage_codes')->find($id);
    
        if (!$learning) {
            return redirect()->back()->with('error', 'Developer Code  record not found.');
        }
    
        // Fetch all paginated data for listing or reference
        $all_data = DB::table('manage_codes')->orderBy('id', 'desc')->paginate(5);
        $totalCount = $all_data->total(); // Total number of records
    
        return view('backend.manage_code.edit', compact('learning', 'all_data', 'totalCount'));
    }

    public function updateManageCode(Request $request, $id)
    {
        // Validate the incoming data
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:manage_codes,slug,' . $id,
        ]);
    
        // Retrieve the specific record
        $data = DB::table('manage_codes')->where('id', $id)->first();
    
        if (!$data) {
            return redirect()->back()->with('error', 'Developer Code  record not found.');
        }
    
        // Update the record
        DB::table('manage_codes')->where('id', $id)->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'status' => $request->status,
            'updated_at' => now(), // Assuming you have a timestamp column
        ]);
    
        return redirect()->back()->with('success', 'Developer Code Successfully Updated!');
    }
    

}
