<?php

namespace App\Http\Controllers\API\v1;
use App\Http\Requests\v1\StoreAppointmentsRequest;
use App\Http\Requests\v1\UpdateAppointmentsRequest;
use App\Http\Resources\v1\AppointmentCollection;
use App\Http\Resources\v1\AppointmentResource;
use App\Models\Appointments;

class AppointmentsController extends Controller
{
    public function index()
    {
        return new AppointmentCollection(Appointments::paginate(5));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAppointmentsRequest $request): AppointmentResource
    {
        return new AppointmentResource(Appointments::create($request->all()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Appointments $appointment): AppointmentResource
    {
        return new AppointmentResource($appointment);
    }


    public function update(UpdateAppointmentsRequest $request, Appointments $appointment)
    {
        //PUT REQUEST UPDATES ALL THE FIELDS IN THE ENTITY -- NOT NEEDED
        //PATCH REQUEST UPDATES ONLY SPECIFIED FIELDS IN THE ENTITY

        //CHANGES THAT COULD BE MADE
        //CHANGE DATE OR TIME -> PRIEST AND USER(wait for priest confirmation)
        //CHANGE THE LOCATION -> PRIEST ONLY
        //CHANGE CONFESSING PRIEST -> DELETE THE APPOINTMENT AND ASK USER TO FIND A NEW APPOINTMENT
        //CHANGE SLOT COUNT -> PRIEST ONLY

        $appointment->update($request->all());
        return new AppointmentResource($appointment);



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointments $appointments)
    {
        //
    }
}
