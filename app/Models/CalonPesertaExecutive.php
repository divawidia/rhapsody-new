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
        'program_executive_id',
        'jenis_refrensi'
    ];

    public function setRefrensiAttribute($value)
    {
        $this->attributes['jenis_refrensi'] = json_encode($value);
    }

    public function getRefrensiAttribute($value)
    {
        return $this->attributes['jenis_refrensi'] = json_decode($value);
    }

    public function program_executive(){
        return $this->belongsTo(ProgramExecutive::class, 'program_executive_id', 'id');
    }
}
