<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Golongan;
use App\Models\Jabatan;
use App\Models\KomponenImbalanPeg;
use App\Models\Lokasi;
use App\Models\Pegawai;
use App\Models\ShiftKerja;
use App\Models\ShiftKerjaDetil;
use App\Models\TrsGaji;

class DashboardController extends Controller
{
    public function index()
    {return response()->json([
        'golongan'             => \App\Models\Golongan::all(),
        'jabatan'              => \App\Models\Jabatan::all(),
        'komponen_imbalan_peg' => \App\Models\KomponenImbalanPeg::all(),
        'lokasi'               => \App\Models\Lokasi::all(),
        
        // PASTIKAN BARIS INI MEMANGGIL PEGAWAI, BUKAN TRSGAJI / DB::table('td_trs_gaji')
        'pegawai'              => \App\Models\Pegawai::all(), // atau DB::table('td_pegawai')->get(),
        
        'shift_kerja'          => \App\Models\ShiftKerja::all(),
        'shift_kerja_detil'    => \App\Models\ShiftKerjaDetil::all(),
        'trs_gaji'             => \App\Models\TrsGaji::all(),
    ]);

        return response()->json($data);
    }
}
