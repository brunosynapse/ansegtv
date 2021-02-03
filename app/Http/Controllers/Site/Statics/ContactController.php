<?php

namespace App\Http\Controllers\Site\Statics;

use App\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        SEOTools::setTitle('Contato');
        SEOTools::setDescription('Entre em contato com a ANSEGTV');
        SEOTools::opengraph()->setTitle(SEOTools::getTitle());
        SEOTools::opengraph()->setDescription('Entre em contato com a ANSEGTV');

        return view('site.pages.statics.contact');
    }
}
