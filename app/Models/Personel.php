<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personel extends Model
{
    use HasFactory;

    protected $table = 'personel'; // Tablonun adı

    protected $fillable = [
        'isim',
        'soyisim',
        'email',
        'bolum',
        'sifre'
    ]; // Doldurulabilir alanlar
}
