<?php

namespace App\Http\Controllers;

use App\Models\Iventario;
use App\Http\Requests\StoreIventarioRequest;
use App\Http\Requests\UpdateIventarioRequest;

class IventarioController extends Controller
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
     * @param  \App\Http\Requests\StoreIventarioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIventarioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Iventario  $iventario
     * @return \Illuminate\Http\Response
     */
    public function show(Iventario $iventario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Iventario  $iventario
     * @return \Illuminate\Http\Response
     */
    public function edit(Iventario $iventario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIventarioRequest  $request
     * @param  \App\Models\Iventario  $iventario
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIventarioRequest $request, Iventario $iventario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Iventario  $iventario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Iventario $iventario)
    {
        //
    }
}
