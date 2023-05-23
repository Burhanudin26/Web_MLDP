<?php

namespace App\Http\Controllers;

use App\Models\dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

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
    
        // Encrypt the password
        $validatedData['password'] = Crypt::encryptString($validatedData['password']);
    
        Dosen::create($validatedData);
    
        return redirect()->route('dosens.index')->with('success', 'Dosen created successfully.');
    }
    

    public function show(Dosen $dosen)
    {
        return view('dosens.show', compact('dosen'));
    }

    public function edit(Dosen $dosen)
    {
        $dosen->password = Crypt::decryptString($dosen->password);
        return view('dosens.edit', compact('dosen'));
    }

    public function update(Request $request, Dosen $dosen)
    {
        $validatedData = $request->validate([
            'name' => 'required'. $dosen->NID,
            'NID' => 'required|unique:dosens,NID,' . $dosen->NID,
            'email' => 'required|unique:dosens,email,' . $dosen->NID,
            'password' => 'required'. $dosen->NID,
            
        ]);
        // Encrypt the new password
        $validatedData['password'] = Crypt::encryptString($validatedData['password']);


        $dosen->update($validatedData);

        return redirect()->route('dosens.index')->with('success', 'Dosen updated successfully.');
    }

    public function destroy(Dosen $dosen)
    {
        $dosen->delete();

        return redirect()->route('dosens.index')->with('success', 'Dosen deleted successfully.');
    }
}
