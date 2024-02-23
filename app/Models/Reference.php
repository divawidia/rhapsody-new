<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    protected $table = 'references';

    protected $fillable = [
        'jenis'
    ];

    public function pesertas()
    {
        return $this->belongsToMany(CalonPesertaDiploma::class, 'reference_calon_peserta_diploma', 'reference_id', 'calon_peserta_diploma_id', 'id');
    }

    use HasFactory;
}
