<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function catalogue()
    {
        return view('catalogue');
    }

    public function delivery()
    {
        return view('delivery');
    }

}
