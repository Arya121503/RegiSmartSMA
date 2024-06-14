<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Siswa;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();  // Ambil detail pengguna yang sedang login
        return view('users.index', compact('user'));
    }

    public function showForm()
    {
        $user = Auth::user();  // Ambil detail pengguna yang sedang login
        return view('users.data-siswa', compact('user'));
    }

    public function store(Request $request)
    {
        // Validasi data yang dikirim
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'tempat_tanggal_lahir' => 'required|string|max:255',
            'alamat' => 'required|string',
            'no_hp' => 'required|string|max:15',
            'nama_ayah' => 'required|string|max:255',
            'nama_ibu' => 'required|string|max:255',
            'asal_sekolah' => 'required|string|max:255',
        ]);

        // Buat data Siswa baru
        Siswa::create($request->all());

        // Redirect kembali dengan pesan sukses menggunakan with
        return redirect()->route('data.siswa')->with('success', 'Data siswa berhasil disimpan.');
    }
}
