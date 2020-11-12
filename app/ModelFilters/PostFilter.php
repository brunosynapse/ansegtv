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

    public function category($name)
    {
        /*  Trocar ao implmentar o ENUM nas categorias */
//        $this->related('category', function($query) use ($id) {
//            return $query->where('category_id', $id);
//        });


        $this->related('category', function($query) use ($name) {
            return $query->where('name', 'LIKE', "%$name%");
        });
    }

    public function status($status)
    {
        return $this->where('status', $status);
    }

}
