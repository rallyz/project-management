<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SidebarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Menampilkan halaman login
Route::get('/', function () {
    return view('auth.login');
})->name('login');

// Proses login (gunakan metode POST)
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

// Proses logout (gunakan metode POST)
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Mengelompokkan rute-rute yang memerlukan otentikasi
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/project-list', [SidebarController::class, 'projectList'])->name('project-list');
    Route::get('/project-create', [SidebarController::class, 'projectCreate'])->name('project-create');
    Route::get('/task-list', [SidebarController::class, 'taskList'])->name('task-list');
    Route::get('/task-details', [SidebarController::class, 'taskDetails'])->name('task-details');
    Route::get('/chat', [SidebarController::class, 'chat'])->name('chat');
    Route::get('/timeline', [SidebarController::class, 'timeline'])->name('timeline');
});

