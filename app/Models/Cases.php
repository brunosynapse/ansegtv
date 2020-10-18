<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    protected $fillable = [
        'name',
        'email',
        'message',
        'attachment',
    ];
}
