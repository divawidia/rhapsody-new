<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimony extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'company',
        'position',
        'onboard_year',
        'photo_url',
        'testimony',
    ];
    protected $table = 'testimonies';
}
