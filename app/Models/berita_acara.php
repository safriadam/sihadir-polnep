<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\jadwal;
use App\Models\dosen;
class berita_acara extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_jdwl',
        'id_dosen',
        'tgl',
        'pkk_bhsn',
        'spkk_bhsn',
        'media',
        'jam_ajar',
    ];

    public function jadwal() {
        return $this->belongsTo(jadwal::class, 'id_jdwl');
        // return $this->belongsTo(dosen::class,'id_dosen');
    }

    // public function berita_acara()
    // {
    //     return $this->hasMany(jadwal::class, 'id_jdwl');
    //     return $this->hasMany(dosen::class, 'id_dosen');
    // }
}
