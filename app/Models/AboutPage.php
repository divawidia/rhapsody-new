<?php

namespace App\Models;

use CyrildeWit\EloquentViewable\InteractsWithViews;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutPage extends Model
{
    use HasFactory;
    use InteractsWithViews;

    protected $fillable = [
        'id',
        'header_title',
        'header_bg',
        'section2_status',
        'section2_title',
        'section2_subtitle',
        'section2_body',
        'section2_img',
        'section3_status',
        'section3_title',
        'section3_subtitle',
        'section3_body',
        'section3_img',
        'visi_misi_section_status',
        'visi',
        'misi',
        'section4_status',
        'section4_body',
        'section4_img',
        'whyrhapsody_section_status',
        'whyrhapsody_section_title',
        'whyrhapsody_section_subtitle',
        'whyrhapsody_section_card1_title',
        'whyrhapsody_section_card1_body',
        'whyrhapsody_section_card1_icon',
        'whyrhapsody_section_card2_title',
        'whyrhapsody_section_card2_body',
        'whyrhapsody_section_card2_icon',
        'whyrhapsody_section_card3_title',
        'whyrhapsody_section_card3_body',
        'whyrhapsody_section_card3_icon',
    ];
    protected $table = 'about_page';
}
