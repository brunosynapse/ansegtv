<?php

namespace App\ModelFilters;

use EloquentFilter\ModelFilter;

class PostFilter extends ModelFilter
{
    /**
    * Related Models that have ModelFilters as well as the method on the ModelFilter
    * As [relationMethod => [input_key1, input_key2]].
    *
    * @var array
    */
    public $relations = [];

    public function title($title)
    {
        return $this->where('title', 'LIKE', "%$title%");
    }

    public function search($search)
    {
        return $this->where('title', 'LIKE', "%$search%")
            ->orWhere('content', 'LIKE', "%".htmlentities($search)."%");
    }

    public function category($id)
    {
        $this->related('category', function($query) use ($id) {
            return $query->where('category_id', $id);
        });
    }

    public function status($status)
    {
        return $this->where('status', $status);
    }

    public function highlight($highlight)
    {
        return $this->where('highlight_position', $highlight);
    }

}
