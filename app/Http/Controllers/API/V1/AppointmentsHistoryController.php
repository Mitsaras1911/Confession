<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Requests\v1\StoreAppointmentsHistoryRequest;
use App\Http\Requests\v1\UpdateAppointmentsHistoryRequest;
use App\Models\AppointmentsHistory;

class AppointmentsHistoryController extends Controller
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
    public function store(StoreAppointmentsHistoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AppointmentsHistory $appointmentsHistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AppointmentsHistory $appointmentsHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAppointmentsHistoryRequest $request, AppointmentsHistory $appointmentsHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AppointmentsHistory $appointmentsHistory)
    {
        //
    }
}
