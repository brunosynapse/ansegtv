<?php


namespace App\Services;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class IncrementCounterViewPostService
{
    public static function handle(Model $post)
    {
        if (!Cookie::has($post->id) && !Auth::check()) {
            Cookie::queue($post->id, 'counter-views', 6 * 60);
            $post->timestamps = false;
            $post->views += 1;
            $post->save();
        }
    }
}
