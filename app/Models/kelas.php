<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;

    public function kelas()
    {
        return $this->belongsTo(kelas::class, 'id_kls');
    }
}
