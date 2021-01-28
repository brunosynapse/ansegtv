<?php

namespace App\Models;

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

    public function scopeOrderedByCreatedAt($query)  //orderedByCreatedAt
    {
        return $query->filter-> orderBy('created_at', 'DESC')->get();
    }

    public function scopePostStatusCount($query, $status, $operator = false) //postStatusCount
    {
        if($operator){
            return $query->where('status', $operator, $status)->count();
        }
        return $query->where('status', $status)->count();
    }

    public function scopeByMonthAndYear($query, $monthNumber, $yearNumber) //byMonthAndYear
    {
        return $query->whereMonth('created_at', $monthNumber)
            ->whereYear('created_at', $yearNumber)->get();
    }
}
