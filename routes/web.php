<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AttendanceController;

Route::get('/attendance', [AttendanceController::class, 'index'])->name('attendance.index');
Route::get('/attendance/create', [AttendanceController::class, 'create'])->name('attendance.create');
Route::post('/attendance', [AttendanceController::class, 'store'])->name('attendance.store');
Route::get('/attendance/{attendance}', [AttendanceController::class, 'show'])->name('attendance.show');
Route::get('/attendance/{attendance}/edit', [AttendanceController::class, 'edit'])->name('attendance.edit');
Route::put('/attendance/{attendance}', [AttendanceController::class, 'update'])->name('attendance.update');
Route::delete('/attendance/{attendance}', [AttendanceController::class, 'destroy'])->name('attendance.destroy');



Route::get('/', function(){return view('guest');});
Route::get('/mahasiswa', function(){return view('mahasiswa');});
Route::get('/dosen', function(){return view('dosen');});
Route::get('/admin', function(){return view('admin');});
Route::get('/bar', function(){return view('bar');});
Route::get('/main', function(){return view('main');});
Route::get('/login', function(){return view('auth.login');});
Route::get('/map', function () {return view('map');});
Route::get('/distance', function () {return view('distance');});
// Route::get('/create', function(){return view('create');});
// Route::get('/show', function(){return view('show');});
// Route::get('/edit', function(){return view('edit');});
// Route::get('/index', function(){return view('index');});


// // Display login form
// Route::get('/login', 'AuthController@loginForm');

// // Handle login request
// Route::post('/login', 'AuthController@login');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
