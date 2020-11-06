<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\CasesRequest;
use App\Services\UploadService;
use App\Models\Cases;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.pages.cases');
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
     * @param  App\Http\Requests\CasesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CasesRequest $request)
    {
        $upload = new UploadService();

        $data = $request->all();

        if($request->hasFile('attachment'))
        {
            $originalAttachmentName = $request->attachment->getClientOriginalName();

            $data['attachment'] = $upload
                ->setKey('attachment')
                ->setFolder('images/cases')
                ->single($request, $originalAttachmentName)['path'];
        }

        Cases::create($data);
        $sent = true;

        return view ('site.pages.cases', compact('sent'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
