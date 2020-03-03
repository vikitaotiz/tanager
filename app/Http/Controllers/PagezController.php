<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorymenu;
use App\Menu;

class PagezController extends Controller
{
    public function menu()
    {
        $categorymenus = Categorymenu::all();

        return view('pagez.menu', compact('categorymenus'));
    }

    public function about()
    {
        return view('pagez.about');
    }

    public function contact()
    {
        return view('pagez.contact');
    }
}
