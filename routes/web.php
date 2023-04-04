<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PsbController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPsbController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardPesanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Kontak
Route::resource('/hubungi-kami', PesanController::class);

// PSB Online
Route::resource('/psb-online', PsbController::class);

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

// Dashboard PSB
Route::resource('/dashboard/psb', DashboardPsbController::class)->middleware('auth');

// Dashboard Post
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

// Dashboard Pesan
Route::resource('/dashboard/pesan', DashboardPesanController::class)->middleware('auth');

// Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');
// Logout
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');

// Beranda
Route::get('/', [BerandaController::class, 'index']);

// Posts
Route::get('/p', [PostController::class, 'index']);

// Tampil Post
Route::get('/{post:slug}', [PostController::class, 'show']);