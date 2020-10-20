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
        'message',
        'attachment',
    ];

    public function modelFilter()
    {
        return $this->provideFilter(CasesFilter::class);
    }
}
