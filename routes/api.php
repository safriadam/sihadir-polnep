<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CicilKompenController;

Route::get('/Dashboard-cicil-kompen',[CicilKompenController::class, 'DashboardCicil']); 

// function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


