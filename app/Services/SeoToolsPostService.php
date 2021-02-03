<?php


namespace App\Services;


use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Database\Eloquent\Model;

class SeoToolsPostService
{
    public static function handle(Model $post)
    {
        SEOTools::setTitle($post->title, false);
        SEOTools::setDescription($post->description);
        SEOTools::opengraph()->setTitle($post->title);
        SEOTools::opengraph()->setDescription($post->description);
        SEOTools::opengraph()->addProperty('published_time', $post->created_at->format('Y/m/d'));
        SEOTools::opengraph()->addProperty('author', config('app.url'));

        if ($post->image) {
            SEOTools::opengraph()->addImage(asset("storage/" . $post->image));
        };

    }
}
