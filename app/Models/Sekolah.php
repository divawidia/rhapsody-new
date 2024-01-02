<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    protected $table = 'sekolah_sosialisasi';

    protected $fillable = [
        'nama_sekolah',
        'alamat_sekolah',
        'kecamatan',
        'kabupaten',
        'no_hp_wa',
        'google_maps'
    ];

    public function siswa(){
        return $this->hasMany(SiswaSmaSmk::class, 'id_sekolah', 'id');
    }

    public function sosialisasi(){
        return $this->hasMany(JadwalSosialisasi::class, 'id_sekolah', 'id');
    }

    use HasFactory;
}
