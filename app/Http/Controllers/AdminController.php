<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        $admin = Auth::user();  // Fetch the logged-in user details
        return view('admins.dashboard', compact('admin'));
    }
}
