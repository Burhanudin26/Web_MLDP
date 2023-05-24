<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswas.index', compact('mahasiswas'));
    }

    public function create()
    {
        return view('mahasiswas.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'NIM' => 'required|unique:mahasiswas',
            'email' => 'required|unique:mahasiswas',
            'password' => 'required',
        ]);

        // Hash the password
        $validatedData['password'] = Hash::make($validatedData['password']);

        Mahasiswa::create($validatedData);

        return redirect()->route('mahasiswas.index')->with('success', 'Mahasiswa created successfully.');
    }

    public function show(Mahasiswa $mahasiswa)
    {
        return view('mahasiswas.show', compact('mahasiswa'));
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        // Decrypt the password for editing
        return view('mahasiswas.edit', compact('mahasiswa'));
    }

    public function update(Request $request, mahasiswa $mahasiswa)
{
    $validatedData = $request->validate([
        'name' => 'required'.$mahasiswa->NIM,
        'NIM' => 'required|unique:mahasiswas,NIM' .$mahasiswa->NIM,
        'email' => 'required|unique:mahasiswas,email' .$mahasiswa->NIM,
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

    $mahasiswa->update($validatedData);

    return redirect()->route('mahasiswas.index')->with('success', 'mahasiswa updated successfully.');
}


    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();

        return redirect()->route('mahasiswas.index')->with('success', 'Mahasiswa deleted successfully.');
    }
}
