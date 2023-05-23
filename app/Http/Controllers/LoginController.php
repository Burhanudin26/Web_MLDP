<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    
    
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
     session()->flash('email', $request->email);
    // $credentials = $request->only('email', 'password');

    // if (Auth::attempt($credentials)) {
    //     // Authentication passed
    //     return redirect()->intended('mahasiswa')->with('success', 'Login successful!');
    // } else {
    //     // Authentication failed
    //     return redirect()->back()->withErrors(['message' => 'Invalid credentials']);
    // }

    $request->validate([
        'email'=>'required',
        'password'=>'required',
    ]);
    $infologin=[
        'email'=>$request->email,
        'password'=>$request->password, 
    ];
    if (Auth::attempt($infologin)) {
        return redirect('mahasiswa')->with('Berhasil');
    } else{
        return redirect('login')->withErrors('Gagal');
    }
    }
    


    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
