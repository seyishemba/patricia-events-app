<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
use App\Http\Controllers\API\EventsController;

Route::prefix('events')->group(function () {
    Route::get('/',[ EventsController::class, 'getAll']);
    Route::post('/',[ EventsController::class, 'create']);
    Route::delete('/{id}',[ EventsController::class, 'delete']);
    Route::get('/{id}',[ EventsController::class, 'get']);
    Route::put('/{id}',[ EventsController::class, 'update']);
});