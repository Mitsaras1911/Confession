<?php

namespace App\Http\Controllers;

use App\Models\Priests;
use App\Http\Requests\StorePriestsRequest;
use App\Http\Requests\UpdatePriestsRequest;

class PriestsController extends Controller
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
    public function store(StorePriestsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Priests $priests)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Priests $priests)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePriestsRequest $request, Priests $priests)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Priests $priests)
    {
        //
    }
}
