<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $this->credentials($request);
        $NI = $request->input('NI');

        if (Str::startsWith($NI, 'NIA')) {
            // Admin login
            $admin = Admin::where('NIA', $NI)->first();

            if ($admin) {
                if (Hash::check($request->input('password'), $admin->password)) {
                    // Perform admin authentication logic
                    return redirect()->intended('/admin');
                } else {
                    return back()->withErrors(['password' => 'Invalid password']);
                }
            }
        } elseif (Str::startsWith($NI, 'NIM')) {
            // Mahasiswa login
            $mahasiswa = Mahasiswa::where('NIM', $NI)->first();

            if ($mahasiswa) {
                if ( Hash::check($request->input('password'), $mahasiswa->password)) {
                    // Perform mahasiswa authentication logic
                    return redirect()->intended('/mahasiswa');
                } else {
                    return back()->withErrors(['password' => 'Invalid password']);
                }
            }
        } elseif (Str::startsWith($NI, 'NID')) {
            // Dosen login
            $dosen = Dosen::where('NID', $NI)->first();

            if ($dosen) {
                if ( Hash::check($request->input('password'), $dosen->password)) {
                    // Perform dosen authentication logic
                    return redirect()->intended('/dosen');
                } else {
                    return back()->withErrors(['password' => 'Invalid password']);
                }
            }
        }

        return back()->withErrors(['NI' => 'Invalid credentials']);
        // return redirect('/dashboard');
    }
    
    protected function credentials(Request $request)
    {
        return [
            'NI' => $request->input('NI'),
            'password' => $request->input('password'),
        ];
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
