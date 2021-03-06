<?php

use App\Http\Controllers\AnnounceClientController;
use App\Http\Controllers\AnnounceDriverController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\MriverController;
use App\Http\Controllers;
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

Route::apiResource('client', ClientController::class);


Route::apiResource('mriver', MriverController::class);

Route::apiResource('profiles' ,ProfileController::class);

Route::get('/client/{id}', [ClientController::class, 'show']);



Route::get('/mriver/{id}', [MriverController::class, 'show']);

Route::get('/announcesClients/luggage/{luggage_type}', [AnnounceClientController::class, 'search']);

Route::get('/announcesClients/{id}', [AnnounceClientController::class, 'show']);

Route::get('/announcesDrivers/vehicule/{vehicule_type}', [AnnounceDriverController::class, 'search']);

Route::get('/announcesDrivers/{id}', [AnnounceDriverController::class, 'show']);