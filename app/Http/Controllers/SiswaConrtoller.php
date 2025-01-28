<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;

class SiswaConrtoller extends Controller
{
    public function index()
    {
      // Mengambil semua data siswa
      $siswa = Siswa::all();
        
      // Mengirim data ke view
      return view('DataSiswa', ['siswa' => $siswa]);
    }
}
