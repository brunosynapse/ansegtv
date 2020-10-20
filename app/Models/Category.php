<?php

namespace App\Models;
use App\ModelFilters\CategoryFilter;
use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    use Filterable;

    protected $fillable = [
        'name',
        'path'
    ];

    public function modelFilter()
    {
        return $this->provideFilter(CategoryFilter::class);
    }
}
