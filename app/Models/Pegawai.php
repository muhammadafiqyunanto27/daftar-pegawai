<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nama', 'alamat', 'nomor_telepon', 'tanggal_lahir', 'tempat_lahir', 'jabatan'
    ];
}
