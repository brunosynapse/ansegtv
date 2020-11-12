<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use EloquentFilter\Filterable;
use App\Enums\PostStatus;
use App\ModelFilters\PostFilter;

class Post extends Model
{
    use Filterable;

    protected $fillable = [
        'title',
        'content',
        'description',
        'category_id',
        'status',
        'image',
        'path'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getMonthUpdatedAtAttribute() // month_updated_at
    {
        return $this->getAttribute('updated_at')->translatedFormat('F');
    }

    public function getDayUpdatedAtAttribute() // day_updated_at
    {
        return $this->getAttribute('updated_at')->translatedFormat('d');
    }

    public function modelFilter()
    {
        return $this->provideFilter(PostFilter::class);
    }

    public function status($status = null)
    {
        $opStatus = PostStatus::getInstances();

        if (!$status)
            return $opStatus;

        return $opStatus[$status];
    }

}
