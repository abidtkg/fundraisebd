<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function admins()
    {
        $admins = User::where('role', '!=', 'fundraiser')->paginate(20);
        return view('admin.user.admins', compact('admins'));
    }

    public function create_admin()
    {
        return view('admin.user.createadmin');
    }

    public function store_admin(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',
            'role' => 'required|string'
        ]);

        try{
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'role' => $request->role
            ]);
            return redirect()->route('admin.admin.index')->with('success', 'Admin created successfully');
        }catch(Exception $e){
            return back()->with('error', 'Failed to create admin');
        }
    }

    public function delete_admin($id){
        $user = User::where('id', $id)->first();
        try{
            $user->delete();
            return back()->with('success', 'Admin deleted successfully');
        }catch(Exception $e){
            return back()->with('error', 'Failed to delete admin');
        }
    }
}
