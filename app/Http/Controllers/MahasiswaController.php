<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

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

        // Encrypt the password
        $validatedData['password'] = Crypt::encryptString($validatedData['password']);

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
        $mahasiswa->password = Crypt::decryptString($mahasiswa->password);
        return view('mahasiswas.edit', compact('mahasiswa'));
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'NIM' => 'required|unique:mahasiswas,NIM,' . $mahasiswa->id,
            'email' => 'required|unique:mahasiswas,email,' . $mahasiswa->id,
            'password' => 'required',
        ]);

        // Encrypt the new password
        $validatedData['password'] = Crypt::encryptString($validatedData['password']);

        $mahasiswa->update($validatedData);

        return redirect()->route('mahasiswas.index')->with('success', 'Mahasiswa updated successfully.');
    }

    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();

        return redirect()->route('mahasiswas.index')->with('success', 'Mahasiswa deleted successfully.');
    }
}
