<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::get('/', function (){
    return '////';
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::group(['prefix'=>'v1','namespace'=>'App\Http\Controllers\API\V1'], function (){

    Route::get('calendar/avail',[\App\Http\Controllers\API\V1\CalendarController::class,'availableDates']);


    Route::apiResource('priests', \App\Http\Controllers\API\V1\PriestsController::class);
   Route::apiResource('appointments', \App\Http\Controllers\API\V1\AppointmentsController::class);
   Route::apiResource('calendar', \App\Http\Controllers\API\V1\CalendarController::class);

});
