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
        Schema::create('td_pegawai', function (Blueprint $table) {
    $table->string('fs_nik', 20)->primary();
    $table->string('fs_nama', 100);
    $table->string('fs_kd_jabatan', 10);
    $table->string('fs_kd_golongan', 10);
    $table->string('fs_kd_lokasi', 10);
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('td_peg');
    }
};
