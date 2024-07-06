<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramContent extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'price',
        'price_desc',
        'batch',
        'register_start',
        'register_end',
        'btn_text',
        'btn_url',
        'btn_icon',
        'overview',
        'short_overview',
        'benefit_content',
        'interest_percentage',
        'alumnies',
        'program_icon',
        'slug',
        'status',
        'program_id'
    ];
    protected $table = 'program_contents';
    public function program(){
        return $this->belongsTo(Program::class, 'program_id', 'id');
    }
    public function program_photos(){
        return $this->hasMany(ProgramPhoto::class, 'program_content_id', 'id');
    }
    public function program_career_companies(){
        return $this->hasMany(ProgramCareerCompany::class, 'program_content_id', 'id');
    }
    public function program_career_salaries(){
        return $this->hasMany(ProgramCareerSalaries::class, 'program_content_id', 'id');
    }
}
