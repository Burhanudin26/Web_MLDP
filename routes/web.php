<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

Route::get('/mahasiswas', [MahasiswaController::class, 'index'])->name('mahasiswas.index');
Route::get('/mahasiswas/create', [MahasiswaController::class, 'create'])->name('mahasiswas.create');
Route::post('/mahasiswas', [MahasiswaController::class, 'store'])->name('mahasiswas.store');
Route::get('/mahasiswas/{mahasiswa}', [MahasiswaController::class, 'show'])->name('mahasiswas.show');
Route::get('/mahasiswas/{mahasiswa}/edit', [MahasiswaController::class, 'edit'])->name('mahasiswas.edit');
Route::put('/mahasiswas/{mahasiswa}', [MahasiswaController::class, 'update'])->name('mahasiswas.update');
Route::delete('/mahasiswas/{mahasiswa}', [MahasiswaController::class, 'destroy'])->name('mahasiswas.destroy');

Route::get('/dosens', [DosenController::class, 'index'])->name('dosens.index');
Route::get('/dosens/create', [DosenController::class, 'create'])->name('dosens.create');
Route::post('/dosens', [DosenController::class, 'store'])->name('dosens.store');
Route::get('/dosens/{dosen}', [DosenController::class, 'show'])->name('dosens.show');
Route::get('/dosens/{dosen}/edit', [DosenController::class, 'edit'])->name('dosens.edit');
Route::put('/dosens/{dosen}', [DosenController::class, 'update'])->name('dosens.update');
Route::delete('/dosens/{dosen}', [DosenController::class, 'destroy'])->name('dosens.destroy');

Route::get('/admins', [AdminController::class, 'index'])->name('admins.index');
Route::get('/admins/create', [AdminController::class, 'create'])->name('admins.create');
Route::post('/admins', [AdminController::class, 'store'])->name('admins.store');
Route::get('/admins/{admin}', [AdminController::class, 'show'])->name('admins.show');
Route::get('/admins/{admin}/edit', [AdminController::class, 'edit'])->name('admins.edit');
Route::put('/admins/{admin}', [AdminController::class, 'update'])->name('admins.update');
Route::delete('/admins/{admin}', [AdminController::class, 'destroy'])->name('admins.destroy');

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
Route::get('/profil', function () {return view('Profil');});


// Display login form
Route::get('/login', 'AuthController@loginForm');

// Handle login request
Route::post('/login', 'AuthController@login');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
