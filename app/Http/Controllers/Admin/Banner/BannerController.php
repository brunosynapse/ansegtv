<?php

namespace App\Http\Controllers\Admin\Banner;

use App\Http\Controllers\Controller;
use App\Services\UploadService;
use App\Http\Requests\BannerRequest;
use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        if(!$banner)
            abort(404);

        return view('admin.pages.banner.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\BannerRequest  $request
     * @param  \App\Models\Banner $banner
     */
    public function update(BannerRequest $request, Banner $banner)
    {

        if(!$banner)
            abort(404);

        $data = $request->all();

        if($request->hasFile('image'))
        {
            $upload = new UploadService();

            $originalImageName = $request->image->getClientOriginalName();

            $upload
                ->removeFilePah($banner->image);

            $data['image'] = $upload
                ->setKey('image')
                ->setFolder('images/banner')
                ->single($request, $originalImageName)['path'];
        }

        $banner->update($data);

        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
