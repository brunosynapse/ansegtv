<?php

namespace App\Http\Controllers\Site\Statics;

use App\Http\Controllers\Controller;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;

class PartnershipsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        SEOTools::setTitle('Parcerias');
        SEOTools::setDescription('Saiba mais sobre a ANSEGTV. Nossa estrutura, unidades, serviços e parcerias');
        SEOTools::opengraph()->setTitle(SEOTools::getTitle());
        SEOTools::opengraph()->setDescription('Saiba mais sobre a ANSEGTV. Nossa estrutura, unidades, serviços e parcerias');

        return view('site.pages.statics.partnerships');
    }
}
