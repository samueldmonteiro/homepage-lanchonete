<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function menu()
    {
        return view('menu', [
            'dishes' => Dish::orderBy('created_at', 'DESC')->get()
        ]);
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
