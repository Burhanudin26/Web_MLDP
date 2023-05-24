<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $admins = Admin::all();
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
             ]);
    
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

    public function update(Request $request, admin $admin)
{
    $validatedData = $request->validate([
        'name' => 'required'.$admin->NIA,
        'NIA' => 'required|unique:dosens,NIA' .$admin->NIA,
        'email' => 'required|unique:dosens,email' .$admin->NIA,
        'password' => '' // Remove the 'required' rule
    ]);

    // Check if a new password is provided
    if ($request->filled('password')) {
        // Hash the new password
        $validatedData['password'] = Hash::make($validatedData['password']);
    } else {
        // If no new password is provided, remove it from the validated data
        unset($validatedData['password']);
    }

    $admin->update($validatedData);

    return redirect()->route('dosens.index')->with('success', 'Dosen updated successfully.');
}


    public function destroy(Admin $admin)
    {
        $admin->delete();

        return redirect()->route('admins.index')->with('success', 'Admin deleted successfully.');
    }
}
