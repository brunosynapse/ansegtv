<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use EloquentFilter\Filterable;
use App\Enums\PostStatusType;
use App\ModelFilters\PostFilter;
use Illuminate\Support\Carbon;

class Post extends Model
{
    use Filterable;

    protected $dates = ['created_at'];

    protected $fillable = [
        'title',
        'content',
        'description',
        'category_id',
        'user_id',
        'status',
        'image',
        'path',
        'highlight_position',
        'created_at'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function modelFilter()
    {
        return $this->provideFilter(PostFilter::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function status($status = null)
    {
        $opStatus = PostStatusType::getInstances();

        if (!$status) {
            return $opStatus;
        }

        return $opStatus[$status];
    }

    public function getFormattedDateAndHourAttribute() //formatted_date_and_hour
    {
        return $this->getAttribute('created_at')->format("d/m/Y - h\hi");
    }

    public function scopeActive($query) //active
    {
        return $query->where('status', PostStatusType::PUBLISHED);
    }

    public function scopeOrderByView($query) //orderByView
    {
        return $query->orderBy('views', 'desc');
    }

    public function scopeFindOrFailBySlug($query, $slug)  //findBySlug
    {
        $users = $query->where('path', $slug)->get();

        if (count($users)) {
            return $users->first();
        }

        abort(404);
    }

    public function scopeHighlight($query, $highlight) //highlight
    {
        return $query->where('highlight_position', $highlight);
    }

    public function scopeWithoutHighlight($query) //withoutHighlight
    {
        return $query->whereNull('highlight_position');
    }

    public function scopeWithoutImage($query) //withoutImage
    {
        return $query->whereNull('image');
    }

    public function scopeLatestDays($query, $days) //latestDays
    {
        return $query->whereDate('created_at', '>', Carbon::now()->subDays($days));
    }

    public function scopeOrderedByCreatedAt($query)  //orderedByCreatedAt
    {
        return $query->filter->orderBy('created_at', 'DESC')->get();
    }

    public function scopePostStatusCount($query, $status, $operator = false) //postStatusCount
    {
        if ($operator) {
            return $query->where('status', $operator, $status)->count();
        }
        return $query->where('status', $status)->count();
    }

    public function scopeByMonthAndYear($query, $monthNumber, $yearNumber) //byMonthAndYear
    {
        return $query->whereMonth('created_at', $monthNumber)
            ->whereYear('created_at', $yearNumber);
    }

    public function scopeArchivedPosts($query, $month, $year) //archivedPosts
    {
        return $query->byMonthAndYear($month, $year)->latest()->take(5)->get();
    }
}
