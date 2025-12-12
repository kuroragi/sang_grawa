<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sekolahs', function (Blueprint $table) {
            $table->id();
            $table->npsn()->unique();
            $table->string('nama_sekolah');
            $table->text('alamat_sekolah')->nullable();
            $table->string('kelurahan_sekolah')->nullable();
            $table->string('kecamatan_sekolah')->nullable();
            $table->string('kota_sekolah')->nullable(); 
            $table->string('logo_sekolah')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->blameable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sekolahs');
    }
};
