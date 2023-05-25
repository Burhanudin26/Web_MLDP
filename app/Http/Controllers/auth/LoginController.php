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
    
            if ($admin && Hash::check($request->input('password'), $admin->password)) {
                Auth::guard('admin')->login($admin);
                return redirect()->intended('/admin');
            }
        } elseif (Str::startsWith($NI, 'NIM')) {
            // Mahasiswa login
            $mahasiswa = Mahasiswa::where('NIM', $NI)->first();
    
            if ($mahasiswa && Hash::check($request->input('password'), $mahasiswa->password)) {
                Auth::guard('mahasiswa')->login($mahasiswa);
                return redirect()->intended('/mahasiswa');
            }
        } elseif (Str::startsWith($NI, 'NID')) {
            // Dosen login
            $dosen = Dosen::where('NID', $NI)->first();
    
            if ($dosen && Hash::check($request->input('password'), $dosen->password)) {
                Auth::guard('dosen')->login($dosen);
                return redirect()->intended('/dosen');
            }
        }
    
        return back()->withErrors(['NI' => 'Invalid credentials']);
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
        if (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
        } elseif (Auth::guard('mahasiswa')->check()) {
            Auth::guard('mahasiswa')->logout();
        } elseif (Auth::guard('dosen')->check()) {
            Auth::guard('dosen')->logout();
        }
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}
