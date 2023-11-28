<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_name',
        'logo_navbar',
        'logo_footer',
        'logo_sidebar_lg',
        'logo_sidebar_sm',
        'kontak_admin',
        'email',
        'alamat',
        'google_maps',
        'foto_lpk',
        'location_title',
        'brosur',
        'url_facebook',
        'url_instagram',
        'url_tiktok',
        'url_youtube',
        'url_linkedin',
        'url_twitter',
    ];
}
