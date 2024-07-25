<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matkul extends Model
{
    use HasFactory;

    public function matkul()
    {
        return $this->belongsTo(matkul::class, 'id_mk');
    }
}
