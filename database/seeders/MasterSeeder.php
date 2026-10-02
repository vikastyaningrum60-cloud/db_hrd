<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jabatan;
use App\Models\Golongan;
use App\Models\Lokasi;
use App\Models\ShiftKerja;
use Illuminate\Support\Facades\DB;

class MasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('td_jabatan')->updateOrInsert(
            ['fs_kd_jabatan' => 'MNG'],
            ['fs_nm_jabatan' => 'Manager', 'created_at' => now(), 'updated_at' => now()]
        );

        DB::table('td_golongan')->updateOrInsert(
            ['fs_kd_golongan' => '3A'],
            ['fs_nm_golongan' => 'Golongan III/a', 'created_at' => now(), 'updated_at' => now()]
        );

        DB::table('td_lokasi')->updateOrInsert(
            ['fs_kd_lokasi' => 'PST'],
            ['fs_nm_lokasi' => 'Kantor Pusat', 'created_at' => now(), 'updated_at' => now()]
        );

        DB::table('td_shift_kerja')->updateOrInsert(
            ['fs_kd_shift' => 'S1'],
            ['fs_nm_shift' => 'Shift Pagi', 'created_at' => now(), 'updated_at' => now()]
        );

        DB::table('td_shift_kerja_detil')->updateOrInsert(
            ['fs_kd_shift' => 'S1', 'fn_jam_ke' => 1],
            ['fs_jam_masuk' => '08:00:00', 'fs_jam_keluar' => '17:00:00', 'created_at' => now(), 'updated_at' => now()]
        );

        DB::table('td_komponen_imbalan_peg')->updateOrInsert(
            ['fs_kd_komponen' => 'GP'],
            ['fs_nm_komponen' => 'Gaji Pokok', 'created_at' => now(), 'updated_at' => now()]
        );

        DB::table('td_pegawai')->updateOrInsert(
            ['fs_nik' => 'PEG001'],
            [
                'fs_nama' => 'Budi Santoso',
                'fs_kd_jabatan' => 'MNG',
                'fs_kd_golongan' => '3A',
                'fs_kd_lokasi' => 'PST',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );

        DB::table('td_trs_gaji')->updateOrInsert(
            ['fs_no_transaksi' => 'TRX001'],
            [
                'fs_nik' => 'PEG001',
                'fn_total_gaji' => 10000000,
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
    }
}
