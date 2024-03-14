<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Requests\v1\StoreCalendarRequest;
use App\Http\Requests\v1\UpdateCalendarRequest;
use App\Http\Resources\V1\CalendarCollection;
use App\Models\Calendar;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $id = $request->get('priest_id');
        return new CalendarCollection(Calendar::where('priest_id', $id)
            ->get());
    }

    public function availableDates(Request $request)
    {
        //name search
        //$results = YourModel::where('column_name', 'LIKE', '%' . $searchTerm . '%')->get();



        $date_from = $request->input('date_from');
        $date_to = $request->input('date_to');
        $rank = $request->input('rank');
        $query =  new CalendarCollection(Calendar::whereBetween('date', [$date_from,$date_to])
            ->where('disabled',0)
            ->with('priest'));
        if($rank != null){
            $query->where('rank', $rank);
        }



        return $query->get();

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
    public function store(StoreCalendarRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Calendar $calendar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Calendar $calendar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCalendarRequest $request, Calendar $calendar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Calendar $calendar)
    {
        //
    }
}
