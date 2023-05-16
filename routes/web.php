<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('guest');
});
Route::get('/mahasiswa', function(){
    return view('mahasiswa');
});
Route::get('/dosen', function(){
    return view('dosen');
});
Route::get('/admin', function(){
    return view('admin');
});
Route::get('/bar', function(){
    return view('bar');
});
Route::get('/main', function(){
    return view('main');
});
// // Display login form
// Route::get('/login', 'AuthController@loginForm');

// // Handle login request
// Route::post('/login', 'AuthController@login');
