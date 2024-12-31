<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Login formunu göstermek için fonksiyon.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('auth.login'); // 'auth.login' view dosyasını döndürüyor
    }

    /**
     * Login işlemini gerçekleştiren fonksiyon.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        // Giriş bilgilerini doğrula
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Giriş bilgilerini al
        $credentials = $request->only('email', 'password');

        // Giriş denemesi
        if (Auth::attempt($credentials)) {
            // Giriş başarılı, yönlendirme yapılır
            return redirect()->intended('dashboard');
        }

        // Giriş başarısız, geri yönlendirme yapılır
        return redirect()->back()
            ->withInput() // Girilen veriyi geri döndür
            ->withErrors(['email' => 'Girdiğiniz bilgiler hatalı.']);
    }

    /**
     * Kullanıcıyı oturumdan çıkarır.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('status', 'Başarıyla çıkış yaptınız.');
    }
}
