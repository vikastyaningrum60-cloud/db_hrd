<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShiftKerja extends Model
{
    protected $table = 'td_shift_kerja';
    protected $primaryKey = 'fs_kd_shift';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'fs_kd_shift',
        'fs_nm_shift',
    ];
}
