<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    use HasFactory;

    public function jadwal()
    {
        return $this->belongsTo(jadwal::class, 'id_jdwl');

        // return $this->hasMany(kelas::class, 'id_kls');
        // return $this->hasMany(matkul::class, 'id_mk');
    }
}
