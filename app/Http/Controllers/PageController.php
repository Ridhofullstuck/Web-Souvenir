<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('layouts.home', [
            "title" => "Home"
        ]);
    }

    public function about()
    {
        return view('layouts.about', [
            "title" => "About"
        ]);
    }
    public function produk()
    {
        return view('layouts.produk', [
            "title" => "Produk"
        ]);
    }

    public function contact()
    {
        return view('layouts.contact', [
            "title" => "Contact",
        ]);
    }
}
