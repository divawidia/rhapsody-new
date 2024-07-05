<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramCareerCompany extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'company_name',
        'company_logo',
        'program_content_id',
        'status',
    ];
    protected $table = 'program_career_companies';
    public function program_content(){
        return $this->belongsTo(ProgramContent::class, 'program_content_id', 'id');
    }
}
