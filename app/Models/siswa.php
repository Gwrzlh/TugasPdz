<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class siswa extends Model
{
    use HasFactory;
	
	
    // Nama tabel di database
    protected $table = 'siswa';

    // Kolom-kolom yang dapat diisi secara massal
    protected $fillable = ['nama', 'alamat'];

}

