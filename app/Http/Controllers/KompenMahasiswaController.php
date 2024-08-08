<?php

namespace App\Http\Controllers;

use App\Models\Kompen_mahasiswa;
use Illuminate\Http\Request;

class KompenMahasiswaController extends Controller
{
    public function DashboardKompen() {

        try {
            $data = Kompen_mahasiswa::all();
            return response()->json([
                'status' => 200,
                'KompenAll' => $data,
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                "error" => $th->getMessage(),
            ], $th->getCode());
        }
    }
}
