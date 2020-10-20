<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use EloquentFilter\Filterable;
use App\Models\Comment;
use App\ModelFilters\PostFilter;

class Post extends Model
{
    use Filterable;

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

    public function category()
    {
        return $this->HasOne(Category::class, 'id');
    }

    public function modelFilter()
    {
        return $this->provideFilter(PostFilter::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
