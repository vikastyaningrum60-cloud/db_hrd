<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    protected $table = 'td_lokasi';
    protected $primaryKey = 'fs_kd_lokasi';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'fs_kd_lokasi',
        'fs_nm_lokasi',
    ];
}
