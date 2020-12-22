<?php

namespace App\Models;

use App\ModelFilters\CasesFilter;
use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{

    use Filterable;

    protected $fillable = [
        'name',
        'email',
        'status',
        'linkVideo',
        'message',
        'attachment',
        'type'
    ];

    public function modelFilter()
    {
        return $this->provideFilter(CasesFilter::class);
    }

    public function getLinkVideoFormattedAttribute() // link_video_formatted
    {
        return explode('?v=', $this->getAttribute   ('linkVideo'))[1];
    }
}
