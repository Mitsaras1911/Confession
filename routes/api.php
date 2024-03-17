<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\v1\AuthController;

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


/*
Route::middleware()->get('/user', function (Request $request) {
    return $request->user();
});*/


Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\API\v1', ''], function () {
    //AUTH ROUTES
    //NOT PROTECTED
    Route::post('login', [\App\Http\Controllers\API\v1\AuthController::class, 'login']);

    //PROTECTED BY SANCTUM AUTH MIDDLEWARE
    Route::group([
        'middleware' => ['auth:sanctum']],
        function () {
            Route::post('logout', [\App\Http\Controllers\API\v1\AuthController::class, 'logout']);
            Route::get('calendar/avail',[\App\Http\Controllers\API\V1\CalendarController::class,'availableDates']);
            Route::apiResource('priests', \App\Http\Controllers\API\v1\PriestsController::class);
            Route::apiResource('appointments', \App\Http\Controllers\API\v1\AppointmentsController::class);
            Route::apiResource('calendar', \App\Http\Controllers\API\v1\CalendarController::class);
    });
});
