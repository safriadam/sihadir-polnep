<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpController;
use App\Http\Controllers\CicilKompenController;
use App\Http\Controllers\API\RevisiPresensiController;
use App\Http\Controllers\API\KompenMahasiswaController;

Route::get('/Dashboard-sp',[spController::class, 'Dashboardsp']); 
// (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

//Cicil Kompen
Route::get('/Dashboard-cicil',[CicilKompenController::class, 'DashboardCicil']);
Route::post("/Tambah-cicil", [CicilKompenController::class, 'tambahCicilKompen']);
Route::patch('/Update-cicil', [CicilKompenController::class, 'updateCicilKompen']);
Route::delete('/Delete-cicil', [CicilKompenController::class, 'deleteCicilKompen']);

Route::get('/Revisi-presensi',[RevisiPresensiController::class, 'DashboardRevisiPresensi']);

//tes
Route::get('/Dashboard-kompen',[KompenMahasiswaController::class, 'DashboardKompen']);