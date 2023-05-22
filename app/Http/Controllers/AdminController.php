<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $admin = Admin::all();
        return view('admins.index', compact('admins'));
    }

    public function create()
    {
        return view('admins.create');
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'NIA' => 'required|unique:admins',
            'email' => 'required|unique:admins',
            'password' => 'required',
            'profile_photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',        ]);
    
        // Hash the password
        $validatedData['password'] = Hash::make($validatedData['password']);
    
        Admin::create($validatedData);
    
        return redirect()->route('admins.index')->with('success', 'Admin created successfully.');
    }
    

    public function show(Admin $admin)
    {
        return view('admins.show', compact('admin'));
    }

    public function edit(Admin $admin)
    {
        return view('admins.edit', compact('admin'));
    }

    public function update(Request $request, Admin $admin)
    {
        $validatedData = $request->validate([
            'name' => 'required'. $admin->NIA,
            'NIA' => 'required|unique:admins,NIA,' . $admin->NIA,
            'email' => 'required|unique:admins,email,' . $admin->NIA,
            'password' => 'required'. $admin->NIA,
            'profile_photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048'. $admin->NIA,
        ]);

        $admin->update($validatedData);

        return redirect()->route('admins.index')->with('success', 'Admin updated successfully.');
    }

    public function destroy(Admin $admin)
    {
        $admin->delete();

        return redirect()->route('admins.index')->with('success', 'Admin deleted successfully.');
    }
}
