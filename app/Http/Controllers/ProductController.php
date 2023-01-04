<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'nome'    => 'required|string|max:25',
            'marca'   => 'required|string|max:25',
            'tipo'    => 'required',
            'preco'   => 'required|numeric|gt:0',
        ]);

        Product::create($request->all());

        return redirect(route('produtos.show'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        $produtos = Product::all();
        return view('produtos.show',['produtos' => $produtos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $produto = Product::findOrFail($id);
        return view('produtos.edit',['produto' => $produto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validated = $request->validate([
            'nome'    => 'required|string|max:25',
            'marca'   => 'required|string|max:25',
            'tipo'    => 'required',
            'preco'   => 'required|numeric|gt:0',
        ]);

        Product::findOrFail($id)->update($request->all());
        return redirect(route('produtos.show'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Product::findOrFail($id)->delete();
        return redirect(route('produtos.show'));
    }
}
