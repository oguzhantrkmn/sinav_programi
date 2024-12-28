<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 'units' tablosunu oluştur
        Schema::create('units', function (Blueprint $table) {
            $table->id(); // Otomatik artan birincil anahtar
            $table->string('name')->unique(); // Birim adı (benzersiz)
            $table->timestamps(); // 'created_at' ve 'updated_at' sütunları
        });

        // 'roles' tablosunu oluştur
        Schema::create('roles', function (Blueprint $table) {
            $table->id(); // Otomatik artan birincil anahtar
            $table->string('name')->unique(); // Rol adı (benzersiz)
            $table->timestamps(); // 'created_at' ve 'updated_at' sütunları
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Tabloları geri al (sil)
        Schema::dropIfExists('units'); // 'units' tablosunu sil
        Schema::dropIfExists('roles'); // 'roles' tablosunu sil
    }
};
