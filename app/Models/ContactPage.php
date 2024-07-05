<?php

namespace App\Models;

use CyrildeWit\EloquentViewable\InteractsWithViews;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactPage extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'header_title',
        'header_bg',
        'header2_title',
        'header2_subtitle',
        'jam_kerja',
        'alamat',
        'no_telp',
        'email',
        'google_maps',
    ];
    protected $table = 'contact_page';
}
