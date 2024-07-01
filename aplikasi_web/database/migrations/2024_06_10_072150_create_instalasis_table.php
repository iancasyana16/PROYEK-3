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
        Schema::create('instalasis', function (Blueprint $table) {
            $table->id();
            $table->string('namaKlien');
            $table->string('alamat');
            $table->string('nomorHp');
            $table->date('tgl_instalasi');
            $table->string('paket');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instalasis');
    }
};