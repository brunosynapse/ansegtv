<?php

namespace App\Http\Controllers\Site\Statics;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StructureController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('site.pages.statics.structure');
    }
}
