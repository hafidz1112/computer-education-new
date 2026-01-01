<?php

namespace App\Http\Controllers;

use App\Models\Category;

class LearnController extends Controller
{
    // halaman awal -> list kategori
    public function index()
    {
        return view('learn.index', [
            'categories' => Category::withCount('moduls')->get()
        ]);
    }

    // halaman modul berdasarkan kategori
    public function modulsByCategory($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();

        return view('learn.moduls', [
            'category' => $category,
            'moduls' => $category->moduls()->latest()->paginate(9)
        ]);
    }
}
