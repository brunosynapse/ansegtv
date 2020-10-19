<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'page_title',
        'post_title',
        'content',
        'keyword',
        'description',
        'category_id',
        'status',
        'tag',
        'path'
    ];

    public function Category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
