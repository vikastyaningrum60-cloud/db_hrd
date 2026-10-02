<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShiftKerjaDetil extends Model
{
    protected $table = 'td_shift_kerja_detil';
    public $incrementing = false;

    protected $fillable = [
        'fs_kd_shift',
        'fn_jam_ke',
        'fs_jam_masuk',
        'fs_jam_keluar',
    ];
}
