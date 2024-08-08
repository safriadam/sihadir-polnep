<?php

namespace App\Http\Controllers;

use App\Models\Kompen_mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KompenMahasiswaController extends Controller
{
    public function DashboardKompen() {

        try {
            // $data = Kompen_mahasiswa::all();

            $data = DB::table("kompen_mahasiswa")
            ->join("matkul","kompen_mahasiswa.id_matkul","=","matkul.id_matkul")
            ->select("matkul.nama_matkul as Mata Kuliah", "kompen_mahasiswa.jumlah_kompen", "kompen_mahasiswa.tgl_kompen")
            ->get();

            $totalkompen = Kompen_mahasiswa::sum("jumlah_kompen");

            return response()->json([
                'status' => 200,
                'KompenAll' => $data,
                'Total Kompen' => $totalkompen
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                "error" => $th->getMessage(),
            ], $th->getCode());
        }
    }
}
