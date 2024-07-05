<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramCareerSalaries extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'position',
        'salary_start',
        'salary_end',
        'program_content_id',
    ];
    protected $table = 'program_career_salaries';
    public function program_content(){
        return $this->belongsTo(ProgramContent::class, 'program_content_id', 'id');
    }
}
