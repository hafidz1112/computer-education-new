<?php

namespace App\Http\Controllers;

use App\Models\Pengurus; // <-- 1. Import model Pengurus
use Illuminate\Http\Request;

class PengurusController extends Controller
{
    public function index()
    {
        // 2. Ambil semua data dari tabel pengurus
        $allPengurus = Pengurus::all();

        // 3. Kirim data ke view 'home' dengan variabel bernama 'pengurus'
        return view('home', ['pengurus' => $allPengurus]);
    }
}