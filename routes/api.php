<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RevisiPresensiController;

Route::get('/Dashboard-Revisi-Presensi', [RevisiPresensiController::class, 'DashboardRevisiPresensi']);


