<?php

namespace App\Http\Controllers;


use GuzzleHttp\Psr7\Request;

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

    public function search()
    {
        return view('search');
    }

}
