<?php

namespace App\Models;

use CyrildeWit\EloquentViewable\InteractsWithViews;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacilityContent extends Model
{
    use InteractsWithViews;

    protected $fillable = [
        'id',
        'facility_page_id',
        'home_page_id',
        'title',
        'subtitle',
        'short_description',
        'long_decription',
        'icon',
    ];
    protected $table = 'facility_contents';

    public function facility_page(){
        return $this->belongsTo(FacilityPage::class, 'facility_page_id', 'id');
    }
    public function home_page(){
        return $this->belongsTo(Home::class, 'home_page_id', 'id');
    }
    public function facility_photo(){
        return $this->hasMany(FacilityPhoto::class, 'facility_id', 'id');
    }
}
