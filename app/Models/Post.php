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
        'path',
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

    public function scopeHighlight($query, $highlight) //highlight
    {
        return $query->where('highlight_position', $highlight)->first();
    }

    public function scopeWithoutHighlightAndWithOrNotImage($query, $image = false) //WithoutHighlightAndWithOrNotImage
    {
        if($image)
        {
            return  $query->whereNull('highlight_position')->whereNull('image');
        }
        return $query->whereNull('highlight_position');
    }
}
