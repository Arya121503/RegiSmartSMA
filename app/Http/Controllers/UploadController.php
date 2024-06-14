<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index()
    {
        $user = Auth::user();  // Ambil detail pengguna yang sedang login
        return view('users.berkas', compact('user'));
    }

    public function submit(Request $request)
    {
        // Validasi file yang diupload
        $request->validate([
            'excel_file' => 'required|mimes:xls,xlsx|max:2048', // Hanya menerima file Excel dengan maksimal 2MB
        ]);

        // Handle file upload logic
        if ($request->hasFile('excel_file')) {
            $file = $request->file('excel_file');

            // Simpan file ke storage atau lokasi tertentu
            if ($file->isValid()) {
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads', $fileName); // Simpan ke folder uploads

                // Lakukan sesuatu dengan file, misalnya mengimpor datanya
                // Contoh:
                // Excel::import(new YourImportClass(), storage_path('app/' . $filePath));

                return redirect()->back()->with('success', 'File berhasil diupload: ' . $fileName);
            } else {
                return redirect()->back()->with('error', 'File gagal diupload');
            }
        } else {
            return redirect()->back()->with('error', 'Tidak ada file yang diupload');
        }
    }
}
