<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personel;

class PersonelController extends Controller
{
    public function create()
    {
        return view('personel.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'isim' => 'required|string|max:255',
            'soyisim' => 'required|string|max:255',
            'email' => 'required|email|unique:personel',
            'bolum' => 'required|string|max:255',
            'sifre' => 'required|string|min:6',
        ]);

        Personel::create([
            'isim' => $request->isim,
            'soyisim' => $request->soyisim,
            'email' => $request->email,
            'bolum' => $request->bolum,
            'sifre' => bcrypt($request->sifre), // Şifreyi hash'le
        ]);

        return redirect()->route('personel.create')->with('success', 'Personel başarıyla eklendi!');
    }
}
