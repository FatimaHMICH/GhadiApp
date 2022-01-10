<?php

use App\Http\Controllers\AnnounceClientController;
use App\Http\Controllers\AnnounceDriverController;
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

//the routes
Route::apiResource('announcesClients', AnnounceClientController::class);

Route::apiResource('announcesDrivers', AnnounceDriverController::class);