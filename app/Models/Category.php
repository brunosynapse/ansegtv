<?php

namespace App\Models;
use App\ModelFilters\CategoryFilter;
use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
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
