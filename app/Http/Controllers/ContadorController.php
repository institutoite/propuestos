<?php

namespace App\Http\Controllers;

use App\Models\Contador;
use App\Http\Requests\StoreContadorRequest;
use App\Http\Requests\UpdateContadorRequest;

class ContadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContadorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Contador $contador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contador $contador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContadorRequest $request, Contador $contador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contador $contador)
    {
        //
    }
}
