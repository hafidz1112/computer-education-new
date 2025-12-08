<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;
use Illuminate\Support\Str;


class KegiatanController extends Controller
{
    //
    public function index()
    {
        $allkegiatan = Kegiatan::all();

        return view('kegiatan', ['allkegiatan' => $allkegiatan]);
    }

    public function show($id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        return view('kegiatan.show', compact('kegiatan'));
    }

}
