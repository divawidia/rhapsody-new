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
        'program_diminati'
    ];

    public function sekolah(){
        return $this->belongsTo(Sekolah::class, 'id_sekolah', 'id');
    }

    use HasFactory;
}
