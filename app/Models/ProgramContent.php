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
    ];
    protected $table = 'program_contents';
    public function program(){
        return $this->belongsTo(Program::class, 'program_id', 'id');
    }
}
