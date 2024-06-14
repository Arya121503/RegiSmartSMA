<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berkas extends Model
{
    protected $table = 'nama_tabel_berkas'; // Ganti 'nama_tabel_berkas' dengan nama tabel yang sesuai

    protected $fillable = [
        'nama_pengguna',
        'nama_berkas',
        // tambahkan atribut lainnya jika ada
    ];
}
