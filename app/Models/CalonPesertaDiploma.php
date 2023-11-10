<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalonPesertaDiploma extends Model
{
    protected $fillable = [
        'nama_lengkap',
        'nama_panggilan',
        'email',
        'alamat',
        'tanggal_lahir',
        'umur',
        'no_hp',
        'no_hp_ortu',
        'jenis_kelamin',
        'asal_sekolah',
        'jurusan_sekolah',
        'tahun_lulus',
        'jenis_refrensi',
        'jurusan_diploma_id'
    ];

    public function jurusan_diploma(){
        return $this->belongsTo(ProgramDiploma::class, 'jurusan_diploma_id', 'id');
    }
}
