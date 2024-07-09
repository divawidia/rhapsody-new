<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'slug',
        'status',
    ];
    protected $table = 'programs';
    public function program_contents(){
        return $this->hasMany(ProgramContent::class, 'program_id', 'id');
    }
}
