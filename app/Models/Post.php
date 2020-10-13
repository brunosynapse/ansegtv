<?php

namespace App\Models;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'page_title',
        'post_title',
        'content',
        'keyword',
        'description',
        'category',
        'tag',
        'status'
    ];

    public function Tags()
    {
        return $this->belongsToMany(Tag::class, 'tag_post');
    }
}
