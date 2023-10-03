<?php

namespace App\Http\Controllers;

use App\Models\ProductoComposicion;
use App\Http\Requests\StoreProductoComposicionRequest;
use App\Http\Requests\UpdateProductoComposicionRequest;

class ProductoComposicionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreProductoComposicionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductoComposicionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductoComposicion  $productoComposicion
     * @return \Illuminate\Http\Response
     */
    public function show(ProductoComposicion $productoComposicion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductoComposicion  $productoComposicion
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductoComposicion $productoComposicion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductoComposicionRequest  $request
     * @param  \App\Models\ProductoComposicion  $productoComposicion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductoComposicionRequest $request, ProductoComposicion $productoComposicion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductoComposicion  $productoComposicion
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductoComposicion $productoComposicion)
    {
        //
    }
}
