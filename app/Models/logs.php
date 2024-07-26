<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class logs extends Model
{
    use HasFactory;
    public function logs()
    {
        // return $this->belongsTo(logs::class, 'id_tahun_ajar');

        return $this->hasMany(jadwal::class, 'id_jdwl');
        // return $this->hasMany(dosen::class, 'id_dosen');
    }
}
