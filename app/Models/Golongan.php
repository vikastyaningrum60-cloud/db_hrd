<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Golongan extends Model
{
    protected $table = 'td_golongan';
    protected $primaryKey = 'fs_kd_golongan';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'fs_kd_golongan',
        'fs_nm_golongan',
    ];
}
