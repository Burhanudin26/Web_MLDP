<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

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
    
        // Encrypt the password
        $validatedData['password'] = Crypt::encryptString($validatedData['password']);
    
        Admin::create($validatedData);
    
        return redirect()->route('admins.index')->with('success', 'Admin created successfully.');
    }
    

    public function show(Admin $admin)
    {
        return view('admins.show', compact('admin'));
    }

    public function edit(Admin $admin)
    {
        $admin->password = Crypt::decryptString($admin->password);
        return view('admins.edit', compact('admin'));
    }

    public function update(Request $request, Admin $admin)
    {
        $validatedData = $request->validate([
            'name' => 'required'. $admin->NIA,
            'NIA' => 'required|unique:admins,NIA,' . $admin->NIA,
            'email' => 'required|unique:admins,email,' . $admin->NIA,
            'password' => 'required'. $admin->NIA,
            
        ]);
        // Encrypt the new password
        $validatedData['password'] = Crypt::encryptString($validatedData['password']);

        $admin->update($validatedData);

        return redirect()->route('admins.index')->with('success', 'Admin updated successfully.');
    }

    public function destroy(Admin $admin)
    {
        $admin->delete();

        return redirect()->route('admins.index')->with('success', 'Admin deleted successfully.');
    }
}
