<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagezController extends Controller
{
    public function menu()
    {
        return view('pagez.menu');
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
