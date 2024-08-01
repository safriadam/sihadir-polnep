<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpController;

Route::get('/Dashboard-sp',[spController::class, 'Dashboardsp']); 
// (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


