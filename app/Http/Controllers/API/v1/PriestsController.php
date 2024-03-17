<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Requests\v1\StorePriestsRequest;
use App\Http\Requests\v1\UpdatePriestsRequest;
use App\Http\Resources\v1\PriestCollection;
use App\Http\Resources\v1\PriestResource;
use App\Models\Priests;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PriestsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): PriestCollection
    {
        return new PriestCollection(Priests::all());
//        with('month_schedule')->get());
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePriestsRequest $request)
    {
       $request->validate([
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            // Add other validation rules for customer fields
        ]);
        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make('12345678'),//TODO in production use $request->password
        ]);

        $priest = Priests::create(array_merge($request->all(), [
            'user_id' => $user->id,
        ]));
        return new PriestResource($priest);
    }

    /**
     * Display the specified resource.
     */
    public function show(Priests $priest): PriestResource
    {
        return new PriestResource($priest);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePriestsRequest $request, Priests $priest): PriestResource
    {
        $priest->update($request->all());
        return new PriestResource($priest);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Priests $priests)
    {
        //
    }
}
