<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FacilityPhoto extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'facility_id',
        'photo_url',
    ];
    protected $table = 'facility_photo';
    public function facility_content(){
        return $this->belongsTo(FacilityContent::class, 'facility_id', 'id');
    }
}
