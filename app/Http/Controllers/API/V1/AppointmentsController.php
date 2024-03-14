<?php

namespace App\Http\Controllers\API\V1;
use App\Http\Requests\v1\StoreAppointmentsRequest;
use App\Http\Requests\v1\UpdateAppointmentsRequest;
use App\Http\Resources\V1\AppointmentCollection;
use App\Http\Resources\V1\AppointmentResource;
use App\Models\Appointments;

class AppointmentsController extends Controller
{
    public function index()
    {
        return new AppointmentCollection(Appointments::all());
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
    public function store(StoreAppointmentsRequest $request)
    {
        $appointment = Appointments::create($request->all());


        return new AppointmentResource($appointment);
    }

    /**
     * Display the specified resource.
     */
    public function show(Appointments $appointment): AppointmentResource
    {
        return new AppointmentResource($appointment);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appointments $appointments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAppointmentsRequest $request, Appointments $appointments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointments $appointments)
    {
        //
    }
}
