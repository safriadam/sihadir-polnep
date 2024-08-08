<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpController;
use App\Http\Controllers\KompenMahasiswaController;

Route::get('/Dashboard-sp',[spController::class, 'Dashboardsp']); 
// (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/Dashboard-kompen',[KompenMahasiswaController::class,'DashboardKompen']);