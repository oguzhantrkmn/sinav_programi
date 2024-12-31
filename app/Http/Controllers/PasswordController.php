<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    public function update(Request $request)
    {
        if (!Auth::check()) {
            return redirect('/login')->withErrors(['message' => 'Lütfen önce giriş yapınız.']);
        }
        
        // Validasyon
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);
        dd(Auth::user()); // Kullanıcı bilgilerini görmek için

        // Kullanıcıyı al
        $user = Auth::user();

        // Mevcut şifre kontrolü
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Mevcut şifre hatalı.']);
        }

        // Yeni şifreyi güncelle
        /** @var \App\Models\User $user **/
        $user->password = Hash::make($request->new_password);
        $user->save();

        return back()->with('success', 'Şifreniz başarıyla güncellendi.');
    }
}