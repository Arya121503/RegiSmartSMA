<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lengkap',
        'tempat_tanggal_lahir',
        'alamat',
        'no_hp',
        'nama_ayah',
        'nama_ibu',
        'asal_sekolah',
    ];
}
