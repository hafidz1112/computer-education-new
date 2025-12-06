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

    public function index() : View
    {
        //get all products
        $moduls = Modul::latest()->paginate(10);
        
        //render view with products
        return view('moduls.learn', compact(var_name: 'moduls'));
    }

    public function category() : View
    {
        //get all products
        $categories = Category::latest()->paginate(10);
        
        //render view with products
        return view('moduls.category', compact(var_name: 'categories'));
    }
    
    
    
}
