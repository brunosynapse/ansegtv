<?php

namespace App\Models;

use App\Enums\PostPositionType;
use Illuminate\Database\Eloquent\Model;
use EloquentFilter\Filterable;
use App\Enums\PostStatusType;
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
        'slug',
        'highlight_position',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function modelFilter()
    {
        return $this->provideFilter(PostFilter::class);
    }

    public function status($status = null)
    {
        $opStatus = PostStatusType::getInstances();

        if (!$status){
            return $opStatus;
        }

        return $opStatus[$status];
    }

    public function scopeHighlight1($query)
    {
        return $query->where('highlight_position', PostPositionType::HIGHTLIGHT_1)->first();
    }

    public function scopeHighlight2($query)
    {

        return $query->where('highlight_position', PostPositionType::HIGHTLIGHT_2)->first();
    }

    public function scopeHighlight3($query)
    {

        return $query->where('highlight_position', PostPositionType::HIGHTLIGHT_3)->first();
    }
}
