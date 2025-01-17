<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id','tag_name', 'slug', 'status'
    ];

    protected $hidden = [

    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class, 'post_tag', 'tag_id', 'post_id', 'id');
    }
}
