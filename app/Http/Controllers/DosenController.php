<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
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
        ]);
    
        // Hash the password
        $validatedData['password'] = Hash::make($validatedData['password']);
    
        Dosen::create($validatedData);
    
        return redirect()->route('dosens.index')->with('success', 'Dosen created successfully.');
    }
    

    public function show(Dosen $dosen)
    {
        return view('dosens.show', compact('dosen'));
    }

    public function edit(Dosen $dosen)
    {
        return view('dosens.edit', compact('dosen'));
    }

    public function update(Request $request, Dosen $dosen)
{
    $validatedData = $request->validate([
        'name' => 'required'.$dosen->NID,
        'NID' => 'required|unique:dosens,NID' .$dosen->NID,
        'email' => 'required|unique:dosens,email' .$dosen->NID,
        'password' => '' 
    ]);

    // Check if a new password is provided
    if ($request->filled('password')) {
        // Hash the new password
        $validatedData['password'] = Hash::make($validatedData['password']);
    } else {
        // If no new password is provided, remove it from the validated data
        unset($validatedData['password']);
    }

    $dosen->update($validatedData);

    return redirect()->route('dosens.index')->with('success', 'Dosen updated successfully.');
}


    public function destroy(Dosen $dosen)
    {
        $dosen->delete();

        return redirect()->route('dosens.index')->with('success', 'Dosen deleted successfully.');
    }
}
