<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WebController extends Controller
{
    public function home()
    {
        $head = $this->seo->render(
            env('APP_NAME') . ' - Homepage',
            'Conheça a versão virtual da nossa lanchonete aqui!!',
            route('home'),
            Storage::url(thumb('assets/images/rfd-min.jpg', 600))
        );

        return view('home', [
            'head' => $head
        ]);
    }

    public function menu()
    {
        $head = $this->seo->render(
            env('APP_NAME') . ' - Menu',
            'Veja todas as opções de pratos e refeições para escolher, atravez do nosso menu virtual.',
            route('menu'),
            Storage::url(thumb('assets/images/rfd-min.jpg', 600))

        );

        return view('menu', [
            'head' => $head,
            'dishes' => Dish::orderBy('created_at', 'DESC')->get()
        ]);
    }

    public function about()
    {
        $head = $this->seo->render(
            env('APP_NAME') . ' - Sobre',
            'Saiba tudo sobre a lanchonete',
            route('home'),
            Storage::url(thumb('assets/images/rfd-min.jpg', 600))
        );

        return view('about', [
            'head' => $head
        ]);
    }

    public function delivery()
    {

        $head = $this->seo->render(
            env('APP_NAME') . ' - Entrega',
            'Veja nossas formas de entrega!',
            route('home'),
            Storage::url(thumb('assets/images/rfd-min.jpg', 600))
        );

        return view('delivery', [
            'head' => $head
        ],);
    }
}
