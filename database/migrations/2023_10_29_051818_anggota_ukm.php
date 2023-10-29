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
        Schema::create('anggota_ukm', function (Blueprint $table) {
            $table->string('npm', 10)->unique();
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->string('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
