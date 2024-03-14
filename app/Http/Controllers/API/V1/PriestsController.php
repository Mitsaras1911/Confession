<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Requests\v1\StorePriestsRequest;
use App\Http\Requests\v1\UpdatePriestsRequest;
use App\Http\Resources\V1\PriestResource;
use App\Models\Priests;
use App\Models\User;
use Illuminate\Http\Request;

class PriestsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return
        Priests::filter()
            ->with('month_schedule')->get();
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
            'password' => bcrypt('12345678'),
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
