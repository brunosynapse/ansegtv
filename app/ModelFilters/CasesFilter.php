<?php

namespace App\ModelFilters;

use EloquentFilter\ModelFilter;

class CasesFilter extends ModelFilter
{
    /**
    * Related Models that have ModelFilters as well as the method on the ModelFilter
    * As [relationMethod => [input_key1, input_key2]].
    *
    * @var array
    */
    public $relations = [];

    public function nameOrEmail($string)
    {
        return $this->where(function($query) use ($string)
        {
            return $query->where('name', 'LIKE', "%$string%")
                ->orWhere('email', 'LIKE', "%$string%");
        });
    }

    public function status ($status)
    {
        return $this->where('status', $status);
    }

}
