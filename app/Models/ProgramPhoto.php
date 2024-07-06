<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramPhoto extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'photos_url',
        'alt',
        'program_content_id',
    ];
    protected $table = 'program_photos';
    public function program_content(){
        return $this->belongsTo(ProgramContent::class, 'program_content_id', 'id');
    }
}
