<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function menu()
    {
        return view('menu');
    }

    public function about()
    {
        return view('about');
    }

    public function delivery()
    {
        return view('delivery');
    }
}
