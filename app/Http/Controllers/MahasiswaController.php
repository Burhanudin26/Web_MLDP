<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MahasiswaController extends Controller
{

    public function index()
    {
        $mahasiswas = mahasiswa::all();
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
            'profile_photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',]);
    
        // Hash the password
        $validatedData['password'] = Hash::make($validatedData['password']);
    
        mahasiswa::create($validatedData);
    
        return redirect()->route('mahasiswas.index')->with('success', 'mahasiswa created successfully.');
    }
    

    public function show(mahasiswa $mahasiswa)
    {
        return view('mahasiswas.show', compact('mahasiswa'));
    }

    public function edit(mahasiswa $mahasiswa)
    {
        return view('mahasiswas.edit', compact('mahasiswa'));
    }

    public function update(Request $request, mahasiswa $mahasiswa)
    {
        $validatedData = $request->validate([
            'name' => 'required'. $mahasiswa->NIM,
            'NIM' => 'required|unique:mahasiswas,NIM,' . $mahasiswa->NIM,
            'email' => 'required|unique:mahasiswas,email,' . $mahasiswa->NIM,
            'password' => 'required'. $mahasiswa->NIM,
            'profile_photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048'. $mahasiswa->NIM,
        ]);

        $mahasiswa->update($validatedData);

        return redirect()->route('mahasiswas.index')->with('success', 'mahasiswa updated successfully.');
    }

    public function destroy(mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();

        return redirect()->route('mahasiswas.index')->with('success', 'mahasiswa deleted successfully.');
    }
}
