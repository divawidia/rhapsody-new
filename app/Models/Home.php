<?php

namespace App\Models;

use CyrildeWit\EloquentViewable\InteractsWithViews;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Home extends Model
{
    use HasFactory;
    use InteractsWithViews;

    protected $fillable = [
        'id',
        'banner_video_url',
        'banner_title',
        'banner_subtitle',
        'daftar_btn_text',
        'daftar_btn_url',
        'section2_status',
        'section2_title',
        'section2_subtitle',
        'section2_body',
        'section2_img1',
        'section2_img2',
        'section2_img3',
        'section2_img4',
        'program_section_status',
        'program_section_title',
        'program_section_subtitle',
        'fasilitas_section_status',
        'fasilitas_section_title',
        'fasilitas_section_subtitle',
        'fasilitas_section_img',
        'fasilitas_section_title2',
        'fasilitas_section_subtitle2',
        'victory_section_status',
    ];
    protected $table = 'home_page';
}
