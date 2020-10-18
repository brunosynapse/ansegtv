<?php

namespace App\Models;
<<<<<<< HEAD
use App\Models\Tag;
=======
>>>>>>> master
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
<<<<<<< HEAD
        'status'
    ];

    public function Tags()
    {
        return $this->belongsToMany(Tag::class, 'tag_post');
=======
        'status',
        'path'
    ];

    public function Category()
    {
        return $this->belongsTo(Category::class, 'category_id');
>>>>>>> master
    }
}
