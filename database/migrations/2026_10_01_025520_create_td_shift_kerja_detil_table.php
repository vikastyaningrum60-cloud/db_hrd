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
    Schema::create('td_shift_kerja_detil', function (Blueprint $table) {
        $table->string('fs_kd_shift', 10);
        $table->integer('fn_jam_ke');
        $table->time('fs_jam_masuk');
        $table->time('fs_jam_keluar');
        $table->timestamps();

        // Menyusun primary key komposit jika diperlukan
        $table->primary(['fs_kd_shift', 'fn_jam_ke']);
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('td_shift_kerja_detil');
    }
};
