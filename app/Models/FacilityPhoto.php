<?php

namespace App\Models;

use CyrildeWit\EloquentViewable\InteractsWithViews;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacilityPhoto extends Model
{
    use HasFactory;
    use InteractsWithViews;

    protected $fillable = [
        'id',
        'facility_id',
        'photo_url',
        'photo_alt'
    ];
    protected $table = 'facility_photo';
    public function facility_content(){
        return $this->belongsTo(FacilityContent::class, 'facility_id', 'id');
    }
}
