<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Login formunu göstermek için fonksiyon
    public function showLoginForm()
    {
        return view('auth.login'); // 'auth.login' view dosyasını döndürüyor
    }

    // Login işlemini gerçekleştiren fonksiyon
    public function login(Request $request)
    {
        // Buraya giriş doğrulama mantığını ekle
        // Örneğin, kullanıcı bilgilerini doğrulamak:
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            // Giriş başarılıysa, yönlendirme yapılır
            return redirect()->intended('dashboard');
        }

        // Giriş başarısızsa tekrar login sayfasına yönlendir ve hata mesajı göster
        return redirect()->back()->withErrors([
            'email' => 'Girdiğiniz bilgiler hatalı.',
        ]);
    }
}
