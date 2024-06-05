<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class responden extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_responden',
        'nama',
        'jenis_kelamin',
        'umur',
        'pekerjaan',
        'email'
    ];
}

