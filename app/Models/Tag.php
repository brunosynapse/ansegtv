<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'name'
    ];

    public function Posts()
    {
        return $this->belongsToMany(Post::class, 'tag_post');
    }
}
