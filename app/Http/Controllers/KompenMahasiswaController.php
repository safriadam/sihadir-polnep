<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Models\Kompen_mahasiswa;

class KompenMahasiswaController extends Controller
{
    
    public function Dashboard_Kompen()
    {
        try {
            // Mengambil data dari tabel kompen_mahasiswa
            $data = DB::table("kompen_mahasiswa")
                ->join("matkul", "kompen_mahasiswa.id_matkul", "=", "matkul.id_matkul")
                ->select("matkul.nama_matkul as Mata kuliah","kompen_mahasiswa.tgl_alpha", "kompen_mahasiswa.jumlah_kompen")
                ->get();

            // Menghitung total kompen
            $totalkompen = Kompen_mahasiswa::sum("jumlah_kompen");

            // Mengembalikan response dalam format JSON
            return response()->json([
                'status' => 200,
                'KompenAll' => $data,
                'Totalkompen' => $totalkompen,
            ], 200);
        } catch (\Throwable $th) {
            // Default kode status HTTP untuk kesalahan server
            $statusCode = is_int($th->getCode()) && $th->getCode() >= 100 && $th->getCode() <= 599 ? $th->getCode() : 500;

            return response()->json([
                "error" => $th->getMessage(),
            ], $statusCode);
        }
    } 
}
