<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nama',
        'email',
        'no_telp',
        'pesan',
    ];
    protected $table = 'contact_forms';
}
