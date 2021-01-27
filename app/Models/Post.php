<?php

namespace App\Models;

use App\Enums\PostPositionType;
use Illuminate\Database\Eloquent\Model;
use EloquentFilter\Filterable;
use App\Enums\PostStatusType;
use App\ModelFilters\PostFilter;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

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

    public function scopeWithoutHighlightAndWithOrNotImage($query, $image = false) //withoutHighlightAndWithOrNotImage
    {
        if($image) {
            return  $query->whereNull('highlight_position')->whereNull('image')->get();
        }
        return $query->whereNull('highlight_position')->get();
    }

    public function scopeOrderedByViewsInTheLast30Days($query) //orderedByViewsInTheLast30Days
    {
            return $query->whereDate('created_at', '>', Carbon::now()->subDays(30))->orderBy('views', 'DESC')->get();
    }
}
