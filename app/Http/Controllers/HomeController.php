<?php

namespace App\Http\Controllers;

use App\Berita;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $berita = Berita::all();
        $product = Product::all();
        return view('main', compact('berita', 'product'));
    }
}
