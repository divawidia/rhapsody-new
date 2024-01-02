<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalSosialisasi extends Model
{
    protected $table = 'sosialisasi';

    protected $fillable = [
        'id_sekolah',
        'tanggal_sosialisasi',
        'jam_sosialisasi',
        'lama_sesi',
        'tempat_sosialisasi',
        'jumlah_siswa',
        'proyektor',
        'speaker',
        'status_sosialisasi',
        'status_follup',
        'note'
    ];

    public function sekolah(){
        return $this->belongsTo(Sekolah::class, 'id_sekolah', 'id');
    }

    public function siswa(){
        return $this->hasMany(SiswaSmaSmk::class, 'id_sekolah', 'id');
    }

    use HasFactory;
}
