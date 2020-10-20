<?php

namespace App\Models;

use App\ModelFilters\CommentFilter;
use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use Filterable;

    protected $fillable = [
        'name',
        'email',
        'post_id',
        'content'
    ];

    public function modelFilter()
    {
        return $this->provideFilter(CommentFilter::class);
    }

    public function post(){
        return $this->belongsTo(Post::class, 'post_id', 'id');
    }
}
