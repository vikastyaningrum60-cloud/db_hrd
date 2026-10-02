<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jabatan;

class JabatanController extends Controller
{
    public function index()
{
$jabatan = Jabatan::all();    
return response()->json($jabatan);
    }
}

