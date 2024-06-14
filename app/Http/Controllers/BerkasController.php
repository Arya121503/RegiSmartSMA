<?php

namespace App\Http\Controllers;

use App\Models\Berkas; // Gantilah 'Berkas' dengan model yang sesuai dengan struktur database Anda
use Illuminate\Http\Request;

class BerkasController extends Controller
{
    public function index()
    {
        $berkas = Berkas::all(); // Ambil semua data berkas dari model

        return view('admins.berkas', compact('berkas')); // Kirim data ke view 'berkas.index'
    }
}
