<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hasil_harapan extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_pertanyaan',
        'stp',
        'tp',
        'cp',
        'p',
        'sp'
    ];
}
