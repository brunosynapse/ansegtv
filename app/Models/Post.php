<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use EloquentFilter\Filterable;
use App\Enums\PostType;
use App\ModelFilters\PostFilter;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    use Filterable;

    protected $fillable = [
        'title',
        'content',
        'description',
        'category_id',
        'status',
        'image',
        'slug'
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
        $opStatus = PostType::getInstances();

        if (!$status)
            return $opStatus;

        return $opStatus[$status];
    }

}
