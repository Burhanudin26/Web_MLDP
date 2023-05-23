<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\admin;
use App\Models\mahasiswa;
use App\Models\dosen;
use Illuminate\Support\Str;


class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $this->credentials($request);
        $NI = $request->input('NI');

        if (Str::startsWith($NI, 'NIA')) {
            // Admin login
            $admin = admin::where('NIA', $NI)->first();

            if ($admin) {
                if ($this->checkPassword($request->input('password'), $admin->password)) {
                    // Perform admin authentication logic
                    return redirect()->intended('/admin');
                } else {
                    return back()->withErrors(['password' => 'Invalid password']);
                }
            }
        } elseif (Str::startsWith($NI, 'NIM')) {
            // Mahasiswa login
            $mahasiswa = mahasiswa::where('NIM', $NI)->first();

            if ($mahasiswa) {
                if ($this->checkPassword($request->input('password'), $mahasiswa->password)) {
                    // Perform mahasiswa authentication logic
                    return redirect()->intended('/mahasiswa');
                } else {
                    return back()->withErrors(['password' => 'Invalid password']);
                }
            }
        } elseif (Str::startsWith($NI, 'NID')) {
            // Dosen login
            $dosen = dosen::where('NID', $NI)->first();

            if ($dosen) {
                if ($this->checkPassword($request->input('password'), $dosen->password)) {
                    // Perform dosen authentication logic
                    return redirect()->intended('/dosen');
                } else {
                    return back()->withErrors(['password' => 'Invalid password']);
                }
            }
        }

        // return back()->withErrors(['NI' => 'Invalid credentials']);
        return redirect('/dashboard');
    }
    // public function login(Request $request)
    // {
    //     $credentials = $this->credentials($request);
    //     $NI = $request->input('NI');
    
    //     // Dump and die to check the value of $NI
    //     dd('NI: ' . $NI);
    
    //     if (Str::startsWith($NI, 'NIA')) {
    //         // Admin login
    //         dd('Admin login');
    
    //         $admin = admin::where('NIA', $NI)->first();
    
    //         // Dump and die to check if admin is found
    //         dd('Admin found: ', $admin);
    
    //         if ($admin) {
    //             if ($this->checkPassword($request->input('password'), $admin->password)) {
    //                 // Perform admin authentication logic
    //                 dd('Admin authentication successful');
    //                 return redirect()->intended('/admin');
    //             } else {
    //                 dd('Invalid admin password');
    //                 return back()->withErrors(['password' => 'Invalid password']);
    //             }
    //         }
    //     } elseif (Str::startsWith($NI, 'NIM')) {
    //         // Mahasiswa login
    //         dd('Mahasiswa login');
    
    //         $mahasiswa = mahasiswa::where('NIM', $NI)->first();
    
    //         // Dump and die to check if mahasiswa is found
    //         dd('Mahasiswa found: ', $mahasiswa);
    
    //         if ($mahasiswa) {
    //             if ($this->checkPassword($request->input('password'), $mahasiswa->password)) {
    //                 // Perform mahasiswa authentication logic
    //                 dd('Mahasiswa authentication successful');
    //                 return redirect()->intended('/mahasiswa');
    //             } else {
    //                 dd('Invalid mahasiswa password');
    //                 return back()->withErrors(['password' => 'Invalid password']);
    //             }
    //         }
    //     } elseif (Str::startsWith($NI, 'NID')) {
    //         // Dosen login
    //         dd('Dosen login');
    
    //         $dosen = dosen::where('NID', $NI)->first();
    
    //         // Dump and die to check if dosen is found
    //         dd('Dosen found: ', $dosen);
    
    //         if ($dosen) {
    //             if ($this->checkPassword($request->input('password'), $dosen->password)) {
    //                 // Perform dosen authentication logic
    //                 dd('Dosen authentication successful');
    //                 return redirect()->intended('/dosen');
    //             } else {
    //                 dd('Invalid dosen password');
    //                 return back()->withErrors(['password' => 'Invalid password']);
    //             }
    //         }
    //     }
    
    //     dd('Invalid credentials');
    //     return back()->withErrors(['NI' => 'Invalid credentials']);
    // }
    
    protected function credentials(Request $request)
    {
        return [
            'NI' => $request->input('NI'),
            'password' => $request->input('password'),
        ];
    }

    protected function checkPassword($password, $hashedPassword)
    {
        return crypt($password, $hashedPassword) === $hashedPassword;
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
