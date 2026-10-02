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
    Schema::create('td_trs_gaji2', function (Blueprint $table) {
        // Samakan tipe data & panjang string dengan tabel referensinya
        $table->string('fs_kd_trs', 20); 
        $table->string('fs_kd_komponen_imbalan', 10);
        $table->decimal('fn_nilai', 18, 2)->default(0);
        $table->timestamps();

        $table->primary(['fs_kd_trs', 'fs_kd_komponen_imbalan']);

        // Ref 1: Ke td_trs_gaji (kolom fs_no_transaksi)
        $table->foreign('fs_kd_trs')
              ->references('fs_no_transaksi')
              ->on('td_trs_gaji')
              ->cascadeOnDelete();

        // Ref 2: Ke td_komponen_imbalan_peg (kolom fs_kd_komponen)
        $table->foreign('fs_kd_komponen_imbalan')
              ->references('fs_kd_komponen')
              ->on('td_komponen_imbalan_peg')
              ->cascadeOnDelete();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('td_trs_gaji2');
    }
};
