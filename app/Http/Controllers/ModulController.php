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
        return view('moduls.learn', compact(var_name: 'moduls'));

    }
    
    
}
