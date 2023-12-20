<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalonPesertaLuarBali extends Model
{
    protected $fillable = [
        'tipe_orang',
        'nama',
        'no_hp',
        'program_diminati',
        'alasan'
    ];
    use HasFactory;
}
