<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Oğuzhan',
            'email' => 'oguzhan@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
