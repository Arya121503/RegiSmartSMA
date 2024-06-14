<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function showSiswa()
    {
        $siswas = Siswa::all();
        return view('admins.siswa', compact('siswas'));
    }

    public function dashboard()
    {
        $siswas = Siswa::all();
        $admin = Auth::user(); // Dapatkan admin yang sedang login
        return view('admins.dashboard', compact('siswas', 'admin'));
    }
}
