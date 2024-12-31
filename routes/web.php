<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SelectionController;
use App\Http\Controllers\PasswordController;

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

// Ana sayfa yönlendirmesi
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Giriş işlemleri
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login'); // Login formunu gösterir
Route::post('/login', [LoginController::class, 'login'])->name('login.submit'); // Login işlemini yapar
Route::post('/login-check', [LoginController::class, 'check'])->name('login.check'); // Giriş kontrolü yapar

// Çıkış işlemi
Route::post('/logout', [LoginController::class, 'logout'])->name('logout'); // Çıkış işlemini yapar

// Görev ve birim seçimi
Route::get('/selection', [SelectionController::class, 'showSelectionForm'])->name('selection'); // Görev ve birim seçimi sayfasını gösterir

// Ana sayfa yönlendirmesi
Route::get('/homepage', function () {
    return view('homepage');
})->name('homepage');

// Şifre değiştirme işlemleri
Route::get('/password/change', function () {
    return view('password.change-password');
})->name('password.change'); // Şifre değiştirme formunu gösterir

Route::post('/password/update', [PasswordController::class, 'update'])
    ->middleware('auth') // Kullanıcının giriş yapmış olması gerekiyor
    ->name('password.update'); // Şifre güncelleme işlemi
