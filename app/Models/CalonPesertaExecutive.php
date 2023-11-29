<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalonPesertaExecutive extends Model
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
        'tahun_lulus',
        'pendidikan_terakhir',
        'asal_sekolah',
        'jurusan',
        'pengalaman_kerja',
        'program_id'
    ];

    public function program(){
        return $this->belongsTo(ProgramContent::class, 'program_id', 'id');
    }
    public function references()
    {
        return $this->belongsToMany(Reference::class, 'reference_calon_peserta_executive', 'peserta_id', 'reference_id', 'id');
    }
}
