<?php

namespace App\Http\Controllers;

use App\Models\dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DosenController extends Controller
{
    public function index()
    {
        $dosens = Dosen::all();
        return view('dosens.index', compact('dosens'));
    }

    public function create()
    {
        return view('dosens.create');
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'NID' => 'required|unique:dosens',
            'email' => 'required|unique:dosens',
            'password' => 'required',
            'profile_photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',        ]);
    
        // Hash the password
        $validatedData['password'] = Hash::make($validatedData['password']);
    
        Dosen::create($validatedData);
    
        return redirect()->route('dosens.index')->with('success', 'Dosen created successfully.');
    }
    

    public function show(Dosen $dosen)
    {
        return view('dosens.show', compact('user'));
    }

    public function edit(Dosen $dosen)
    {
        return view('dosens.edit', compact('user'));
    }

    public function update(Request $request, Dosen $dosen)
    {
        $validatedData = $request->validate([
            'name' => 'required'. $dosen->NID,
            'NID' => 'required|unique:dosens,NID,' . $dosen->NID,
            'email' => 'required|unique:dosens,email,' . $dosen->NID,
            'password' => 'required'. $dosen->NID,
            'profile_photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048'. $dosen->NID,
        ]);

        $dosen->update($validatedData);

        return redirect()->route('dosens.index')->with('success', 'Dosen updated successfully.');
    }

    public function destroy(Dosen $dosen)
    {
        $dosen->delete();

        return redirect()->route('dosens.index')->with('success', 'Dosen deleted successfully.');
    }
}
