<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiswaSmaSmk extends Model
{
    protected $fillable = [
        'nama_lengkap',
        'nama_panggilan',
        'no_hp',
        'asal_sekolah',
        'jurusan',
        'program_diminati'
    ];
    use HasFactory;
}
