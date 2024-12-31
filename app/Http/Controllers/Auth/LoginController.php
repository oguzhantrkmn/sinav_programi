<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    /**
     * Login formunu gösterir.
     */
    public function showLoginForm()
    {
        return view('auth.login'); // Login sayfasının blade dosyasının yolu
    }

    /**
     * Giriş bilgilerini kontrol eder ve gerekli yönlendirmeyi yapar.
     */
    public function check(Request $request)
    {
        // Validasyon kuralları
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Kullanıcıyı email üzerinden bul
        $user = User::where('email', $request->email)->first();

        // Kullanıcı bulunamadıysa veya şifre yanlışsa hata mesajı döner
        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->withErrors(['email' => 'E-posta veya şifre hatalı.']);
        }

        // Kullanıcı giriş yapar
        Auth::login($user);

        // Modal gösterimi için session ayarı yapılır
        return redirect()->route('login')->with('showModal', true);
    }

    /**
     * Kullanıcı giriş işlemini yapar ve görev/birim ekranına yönlendirir.
     */
    public function login(Request $request)
    {
        // Validasyon kuralları
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Kullanıcıyı email üzerinden bul
        $user = User::where('email', $request->email)->first();

        // Kullanıcı bulunamadıysa veya şifre yanlışsa hata mesajı döner
        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->withErrors(['email' => 'E-posta veya şifre hatalı.']);
        }

        // Kullanıcı giriş yapar
        Auth::login($user);

        // Görev ve birim seçme ekranına yönlendirilir
        return redirect()->route('selection');
    }

    /**
     * Kullanıcı çıkış işlemini gerçekleştirir.
     */
    public function logout(Request $request)
    {
        // Kullanıcı çıkış yapar
        Auth::logout();

        // Oturum bilgileri temizlenir
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Login ekranına yönlendirilir
        return redirect()->route('login');
    }
}
