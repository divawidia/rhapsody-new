<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramExecutive extends Model
{
    protected $fillable = [
        'nama_program'
    ];

    public function calon_mahasiswas(){
        return $this->hasMany(CalonMahasiswa::class, 'program_executive_id', 'id');
    }
}
