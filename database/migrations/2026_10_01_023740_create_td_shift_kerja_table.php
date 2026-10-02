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
    Schema::create('td_shift_kerja', function (Blueprint $table) {
        $table->string('fs_kd_shift', 10)->primary();
        $table->string('fs_nm_shift', 100);
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('td_shift_kerja');
    }
};
