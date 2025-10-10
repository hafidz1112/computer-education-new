<?php

namespace App\Http\Controllers;

use App\Models\Modul;
use App\Models\Moduls;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class ModulController extends Controller
{
    public function index() : View
    {
        //get all products
        $moduls = Modul::latest()->paginate(10);
        
        //render view with products
        return view('moduls.index', compact(var_name: 'moduls'));
    }
    
    public function create() : view {
        return view('moduls.create');
    }
    
    public function store(Request $request) : RedirectResponse 
    {
        $request->validate([
            'title'         => 'required|min:5',
            'deskripsi1'   => 'required|min:10',
            'judulkonten1'  => 'required|min:10',
            'konten1'       => 'required|min:20',
            'judulkonten2'  => 'min:10',
            'konten2'       => 'min:10',
            'image'         => 'required|image|mimes:jpeg,jpg,png|max:3048'
        ]);
        $image = $request->file('image');
        $image->storeAs('public/moduls', $image->hashName());

        //create product
        Modul::create([
            'image'         => $image->hashName(),
            'title'         => $request->title,
            'deskripsi1'   => $request->description,
            'judulkonten1' => $request->judulkonten1,
            'konten1'      => $request->konten1,
            'judulkonten2' => $request->judulkonten2,
            'konten2'      => $request->konten2,
        ]);

        //redirect to index
        return redirect()->route('moduls.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
