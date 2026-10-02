<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrsGaji extends Model
{
    protected $table = 'td_trs_gaji';
    protected $primaryKey = 'fs_kd_trs';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'fs_kd_trs',
        'fs_nik',
        'fn_gaji_pokok',
    ];
}
