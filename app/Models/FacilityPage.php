<?php

namespace App\Models;

use CyrildeWit\EloquentViewable\InteractsWithViews;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacilityPage extends Model
{
    use HasFactory;
    use InteractsWithViews;

    protected $fillable = [
        'id',
        'header_title',
        'header_bg',
    ];
    protected $table = 'facility_page';
    public function facility_content(){
        return $this->hasMany(FacilityContent::class, 'facility_page_id', 'id');
    }
}
