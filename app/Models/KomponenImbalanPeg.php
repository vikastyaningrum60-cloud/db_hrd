<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KomponenImbalanPeg extends Model
{
    protected $table = 'td_komponen_imbalan_peg';
    protected $primaryKey = 'fs_kd_komponen';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'fs_kd_komponen',
        'fs_nm_komponen',
    ];
}
