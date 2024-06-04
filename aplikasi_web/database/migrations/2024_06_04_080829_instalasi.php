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
        Schema::create('instalasi', function (Blueprint $table) {
            $table->id('id_instalasi');
            $table->unsignedBigInteger('id_admin');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_layanan');
            $table->date('tanggal_instalasi');
            $table->string('status_instalasi');
            $table->timestamps();

            $table->foreign('id_admin')->references('id_admin')->on('admin');
            $table->foreign('id_user')->references('id_user')->on('user');
            $table->foreign('id_layanan')->references('id_layanan')->on('layanan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instalasi');
    }
};