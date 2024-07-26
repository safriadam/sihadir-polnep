<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    use HasFactory;

    public function dosen()
    {
        return $this->belongsTo(dosen::class, 'id_dosen');

        // return $this->hasMany(users::class, 'id');
    }
}
