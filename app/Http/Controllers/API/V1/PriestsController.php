<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Requests\StorePriestsRequest;
use App\Http\Requests\UpdatePriestsRequest;
use App\Http\Resources\V1\PriestCollection;
use App\Http\Resources\V1\PriestResource;
use App\Models\Priests;
use App\Filters\V1\PriestsFilter;
use Illuminate\Http\Request;

class PriestsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): PriestCollection
    {
        $filter = new PriestsFilter();
        $queryItems = $filter->transform($request);
        if(count($queryItems)==0)
            return new PriestCollection(Priests::paginate());
        else
            return new PriestCollection(Priests::where($queryItems)->paginate());
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
    public function show(Priests $priest): PriestResource
    {
        return new PriestResource($priest);
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
