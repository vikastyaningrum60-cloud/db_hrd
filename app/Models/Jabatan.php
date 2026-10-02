<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
   protected $table = 'td_jabatan';
    public function pegawai()
{
    return $this->hasMany(Pegawai::class, 'fs_kd_jabatan', 'fs_kd_jabatan');
}
}
