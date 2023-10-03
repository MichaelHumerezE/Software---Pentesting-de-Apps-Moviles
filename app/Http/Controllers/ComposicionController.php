<?php

namespace App\Http\Controllers;

use App\Models\Composicion;
use App\Http\Requests\StoreComposicionRequest;
use App\Http\Requests\UpdateComposicionRequest;

class ComposicionController extends Controller
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
     * @param  \App\Http\Requests\StoreComposicionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComposicionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Composicion  $composicion
     * @return \Illuminate\Http\Response
     */
    public function show(Composicion $composicion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Composicion  $composicion
     * @return \Illuminate\Http\Response
     */
    public function edit(Composicion $composicion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateComposicionRequest  $request
     * @param  \App\Models\Composicion  $composicion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComposicionRequest $request, Composicion $composicion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Composicion  $composicion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Composicion $composicion)
    {
        //
    }
}
