<?php

use App\Http\Controllers\KompenMahasiswaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CicilKompenController;

Route::get('/Dashboard-cicil-kompen',[CicilKompenController::class, 'DashboardCicil']); 

Route::get("/Dashboard-Kompen", [KompenMahasiswaController::class, 'Dashboardkompen']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


