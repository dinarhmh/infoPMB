<?php

namespace App\Http\Controllers;

use App\Models\Gambar;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $gambar = Gambar::all(); // Mengambil semua data gambar
        return view('dashboard', compact('gambar'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'keterangan' => 'required|string',
        ]);

        $file = $request->file('file');
        $nama_file = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('public/data_file', $nama_file);

        Gambar::create([
            'file' => $nama_file,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('dashboard')->with('success', 'Gambar berhasil diupload!');
    }

    public function destroy($id)
    {
        $gambar = Gambar::findOrFail($id);
        if (file_exists(storage_path('app/public/data_file/' . $gambar->file))) {
            unlink(storage_path('app/public/data_file/' . $gambar->file));
        }
        $gambar->delete();

        return redirect()->route('dashboard')->with('success', 'Gambar berhasil dihapus!');
    }
}
