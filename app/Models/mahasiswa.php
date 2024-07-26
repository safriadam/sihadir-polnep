<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;

    public function mahasiswa()
    {
        return $this->belongsTo(mahasiswa::class, 'id_mhs');

        // return $this->hasMany(users::class, 'id');
        // return $this->hasMany(kelas::class, 'id_kls');
        // return $this->hasMany(logs::class, 'id_tahun_ajar');
    }
}
