<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\jadwal;

class presensi extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'id_tahun_ajar',
    // ];

    // public function tahun_ajar() {
    //     return $this->belongsTo(logs::class, 'id_tahun_ajar');
    // }
    public function presensi()
    {
        
        return $this->belongsTo(presensi::class, 'id_presensi');

        // return $this->hasMany(jadwal::class, 'id_jdwl');
        // return $this->hasMany(logs::class, 'id_tahun_ajar');
        // return $this->hasMany(mahasiswa::class, 'id_mhs');
    }
}
