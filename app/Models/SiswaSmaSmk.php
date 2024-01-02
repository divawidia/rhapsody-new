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
        'id_sekolah',
        'jurusan',
        'program_diminati',
        'id_sosialisasi'
    ];

    public function sekolah(){
        return $this->belongsTo(Sekolah::class, 'id_sekolah', 'id');
    }

    public function sosialisasi(){
        return $this->belongsTo(JadwalSosialisasi::class, 'id_sosialisasi', 'id');
    }

    use HasFactory;
}
