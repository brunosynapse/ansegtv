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
        'image_credit',
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


    /*  Formatted */

    public function getFormattedCategoryNameAttribute() { //formatted_category_name
        return $this->category->name;
    }

    public function getFormattedUserAttribute() { //formatted_user
        return $this->user->name;
    }

    public function getFormattedDateAndHourAttribute() //formatted_date_and_hour
    {
        return $this->getAttribute('created_at')->format("d/m/Y - h\hi");
    }

    public function getFormattedDateAttribute() //formatted_date
    {
        return $this->getAttribute('created_at')->format("d/m/Y");
    }


    /* Scope */

    public function scopeActive($query) //active
    {
        return $query->where('status', PostStatusType::PUBLISHED);
    }

    public function scopeFindOrFailBySlug($query, $slug)  //findBySlug
    {
        $users = $query->where('path', $slug)->get();

        if (count($users)) {
            return $users->first();
        }

        abort(404);
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
        return $query->whereYear('created_at', $yearNumber)
            ->whereMonth('created_at', $monthNumber);
    }


    /* Scope - highlight */

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

    public function scopeWithImage($query) //withImage
    {
        return $query->whereNotNull('image');
    }


    /*  Scope - ordered */

    public function scopeOrderByView($query) //orderByView
    {
        return $query->orderBy('views', 'desc');
    }

    public function scopeLatestDays($query, $days) //latestDays
    {
        return $query->whereDate('created_at', '>', Carbon::now()->subDays($days));
    }

    public function scopeOrderedByCreatedAt($query)  //orderedByCreatedAt
    {
        return $query->filter->orderBy('created_at', 'DESC')->get();
    }

    public function scopeArchivedPosts($query, $month, $year) //archivedPosts
    {
        return $query->byMonthAndYear($month, $year)->latest()->take(5)->get();
    }

    public function scopeLatestWithImageAndWithoutHighlight($query) { //latestWithImageAndWithoutHighlight
        return $query->active()->latest()->withoutHighlight()->withImage()->get();
    }

    public function scopeLatestWithoutImageAndWithoutHighlight($query) { //latestWithoutImageAndWithoutHighlight
        return $query->active()->latest()->withoutHighlight()->withoutImage()->get();
    }
}
