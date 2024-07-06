<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VictorySection extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'victory_section_title',
        'victory_section_body',
        'victory_section_btn_text',
        'victory_section_btn_icon',
        'victory_section_btn_url',
        'victory_section_bg',
    ];
    protected $table = 'victory_section';
}
