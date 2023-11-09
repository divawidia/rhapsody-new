<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramExecutive extends Model
{
    protected $fillable = [
        'nama_program'
    ];

    public function calon_peserta_executive(){
        return $this->hasMany(CalonPesertaExecutive::class, 'program_executive_id', 'id');
    }
}
