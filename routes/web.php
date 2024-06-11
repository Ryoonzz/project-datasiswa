<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;

Route::get('/', [AuthController::class, 'login'])->name('login');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/postregister', [AuthController::class, 'postregister'])->name('postregister');

Route::group(['middleware' => ['auth', 'checkRole:admin']], function () {
    Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa');
    Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
    Route::post('/siswa/store', [SiswaController::class, 'store'])->name('siswa.store');
    Route::get('/siswa/edit/{siswa}', [SiswaController::class, 'edit'])->name('siswa.edit');
    Route::post('/siswa/update/{siswa}', [SiswaController::class, 'update'])->name('siswa.update');
    Route::get('/siswa/delete/{siswa}', [SiswaController::class, 'delete'])->name('siswa.delete');
    Route::get('/siswa/{siswa}/profile', [SiswaController::class, 'profile'])->name('siswa.profile');
    Route::post('/siswa/{siswa}/addnilai', [SiswaController::class, 'addnilai'])->name('siswa.addnilai');
    Route::get('/siswa/{siswa}/{idmapel}/deletenilai', [SiswaController::class, 'deletenilai'])->name('siswa.deletenilai');
    Route::get('/guru/{guru}/profile', [GuruController::class, 'profile'])->name('guru.profile');
});

Route::group(['middleware' => ['auth', 'checkRole:admin,siswa']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

