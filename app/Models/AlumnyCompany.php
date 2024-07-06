<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlumnyCompany extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'url',
        'company_logo_url',
        'company_logo_alt',
    ];
    protected $table = 'alumny_company';
}
