<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitAndRoleSeeder extends Seeder
{
    public function run()
    {
        // Birimler
        $units = [
            'Fen Edebiyat Fakültesi',
            'Mühendislik Fakültesi',
            'İktisadi ve İdari Bilimler Fakültesi',
            'Tıp Fakültesi',
            'Hukuk Fakültesi',
            'Eğitim Fakültesi',
            'Sağlık Bilimleri Fakültesi',
            'Denizcilik Meslek Yüksekokulu',
            'Meslek Yüksekokulu',
            'Güzel Sanatlar Fakültesi',
            'Ziraat Fakültesi',
            'Diş Hekimliği Fakültesi',
        ];

        foreach ($units as $unit) {
            DB::table('units')->updateOrInsert(
                ['name' => $unit],
                ['created_at' => now(), 'updated_at' => now()]
            );
        }

        // Görevler
        $roles = ['Öğrenci', 'Akademisyen', 'Personel', 'İdari Çalışan'];
        foreach ($roles as $role) {
            DB::table('roles')->updateOrInsert(
                ['name' => $role],
                ['created_at' => now(), 'updated_at' => now()]
            );
        }
    }
}


