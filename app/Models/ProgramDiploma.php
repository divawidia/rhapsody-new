<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramDiploma extends Model
{
    protected $fillable = [
        'nama_jurusan'
    ];

    public function calon_peserta_diploma(){
        return $this->hasMany(CalonPesertaDiploma::class, 'jurusan_diploma_id', 'id');
    }
}
