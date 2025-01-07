<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SelectionController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\PersonelController;

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

// Ana sayfa yönlendirmesi (http://127.0.0.1:8000)
Route::get('/', function () {
    return redirect()->route('login'); // Ana sayfayı login ekranına yönlendirir
});

// Giriş işlemleri
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login'); // Login formunu gösterir
Route::post('/login', [LoginController::class, 'check'])->name('login.check'); // Login kontrol işlemi yapar
Route::post('/login-submit', [LoginController::class, 'login'])->name('login.submit'); // Login işlemini yapar

// Çıkış işlemi
Route::post('/logout', [LoginController::class, 'logout'])->name('logout'); // Çıkış işlemini yapar

// Görev ve birim seçimi
Route::get('/selection', [SelectionController::class, 'showSelectionForm'])->middleware('auth')->name('selection'); // Görev ve birim seçimi sayfasını gösterir

// Ana sayfa
Route::get('/homepage', function () {
    return view('homepage');
})->middleware('auth')->name('homepage'); // Giriş yapılmış kullanıcılar için ana sayfa

// Şifre değiştirme işlemleri
Route::get('/password/change', function () {
    return view('password.change-password');
})->middleware('auth')->name('password.change'); // Şifre değiştirme formunu gösterir

Route::post('/password/update', [PasswordController::class, 'update'])
    ->middleware('auth') // Kullanıcının giriş yapmış olması gerekiyor
    ->name('password.update'); // Şifre güncelleme işlemi
Route::get('/personel/ekle', [PersonelController::class, 'create'])->name('personel.create');
Route::post('/personel/ekle', [PersonelController::class, 'store'])->name('personel.store');