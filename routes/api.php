<?php

use App\Http\Controllers\KompenMahasiswaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RevisiPresensiController;
use App\Http\Controllers\CicilKompenController;

Route::get('/Dashboard-cicil-kompen',[CicilKompenController::class, 'DashboardCicil']);

Route::get("/Dashboard-Kompen", [KompenMahasiswaController::class, 'Dashboardkompen']);

Route::get('/Dashboard-Revisi-Presensi', [RevisiPresensiController::class, 'DashboardRevisiPresensi']);


