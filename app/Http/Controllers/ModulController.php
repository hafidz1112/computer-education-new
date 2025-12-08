<?php

namespace App\Http\Controllers;

use App\Models\Modul;
use App\Models\Moduls;
use App\Models\Category;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class ModulController extends Controller

{
    public function show($slug)
    {
        $modul = Modul::where('slug', $slug)->firstOrFail();
        return view('learn.show', compact('modul'));
    }
    
    
}
