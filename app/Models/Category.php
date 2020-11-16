<?php

namespace App\Models;
use App\ModelFilters\CategoryFilter;
use EloquentFilter\Filterable;
use App\Models\Post;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    use Filterable;

    protected $fillable = [
        'name',
        'path'
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function modelFilter()
    {
        return $this->provideFilter(CategoryFilter::class);
    }
}
