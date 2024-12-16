<?php

namespace App\Http\Controllers;

use App\Models\Gambar;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $gambar = Gambar::all(); // Ambil semua data dari model Gambar
        return view('home', compact('gambar')); // Kirim data ke view
    }
}
