<?php

namespace App\Http\Controllers;

use App\Berita;
use App\Product;
use App\Team;
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
        $team = Team::all();
        return view('main', compact('berita', 'product', 'team'));
    }

    public function user()
    {
        return view('user');
    }

    public function news()
    {
        $data = Berita::all();
        return view('news', compact('data'));
    }
}
