<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $product = Product::all();
        return view('dashboard.product.index', compact ('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'kategori' => 'required',
            'photo' => 'required|max:2048',
        ]);
        if($request->hasFile('photo')){
            $destination_path = 'public/images/product';
            $image = $request->file('photo');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('photo')->storeAs($destination_path, $image_name);
            
            $input['photo'] = $image_name;
        }
        
        Product::create($input);
        session()->flash('success', 'Berhasil Menambahkan Product');
        
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Product::find($id);
        return view('dashboard.product.edit', compact ('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'kategori' => 'required',
            'photo' => 'required|max:2048',
        ]);
        if($request->hasFile('photo')){
            $destination_path = 'public/images/product';
            $image = $request->file('photo');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('photo')->storeAs($destination_path, $image_name);
            
            $input['photo'] = $image_name;
        }
        
        Product::create($input);
        session()->flash('success', 'Berhasil Mengedit Product');
        
        return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Product::find($id);
        $data->delete();
        return back();
    }
}
