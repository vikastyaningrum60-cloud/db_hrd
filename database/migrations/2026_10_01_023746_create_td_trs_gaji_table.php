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
        Schema::create('td_trs_gaji', function (Blueprint $table) {
    $table->string('fs_no_transaksi', 20)->primary();
    $table->string('fs_nik', 20);
    $table->decimal('fn_total_gaji', 15, 2);
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('td_trs_gaji');
    }
};
