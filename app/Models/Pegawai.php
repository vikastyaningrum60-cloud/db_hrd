<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'td_pegawai';
    protected $primaryKey = 'fs_nik';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'fs_nik',
        'fs_nama',
        'fs_kd_jabatan',
        'fs_kd_golongan',
        'fs_kd_lokasi',
    ];
}

