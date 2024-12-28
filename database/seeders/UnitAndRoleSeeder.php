<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Unit;
use App\Models\Role;

class UnitAndRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void 
     */
    public function run()
    {
        // Unit verileri
        Unit::create(['name' => 'İnsan Kaynakları']);
        Unit::create(['name' => 'Muhasebe']);
        Unit::create(['name' => 'Satış']);

        // Role verileri
        Role::create(['name' => 'Yönetici']);
        Role::create(['name' => 'Uzman']);
        Role::create(['name' => 'Personel']);
    }
}
