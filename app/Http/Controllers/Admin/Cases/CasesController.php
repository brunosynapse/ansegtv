<?php

namespace App\Http\Controllers\Admin\Cases;

use App\Models\Cases;
use App\Http\Controllers\Controller;
use App\Http\Requests\CasesRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class CasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $casesCount = Cases::all()->count();
        $casesPublishedCount = Cases::where('status', 'published')->count();
        $casesUnPublishedCount = Cases::where('status', 'unpublished')->count();

        $cases = Cases::filter($request->all())->paginateFilter(15);

        return view('admin/pages/cases/index',
            compact('cases', 'casesCount', 'casesPublishedCount', 'casesUnPublishedCount'));
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
     * @param  \App\Http\Requests\CasesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CasesRequest $request)
    {
        $data = $request->all();

        if($request->hasFile('attachment') && $request->file('attachment')->isValid()){
            $path = Storage::putFile('public/images/cases', $request->file('attachment'));
            $data['attachment'] = $path;
        }

        Cases::create($data);

        dd($data);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $case = Cases::find($id);

        if($case)
            return view('admin/pages/cases/show', compact('case'));

        abort(404);
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
        $data = $request->only('status');

        $case = Cases::find($id);

        if(!$case)
            return abort(404);

        $case->status = $data['status'];
        $case->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $case = Cases::find($id);

        if(!$case)
            abort(404);

        $case->delete();

        return redirect()->back();
    }

    /**
     * Download the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function downloadFile(Request $request)
    {
        if(!$request->attachment)
            abort(404);

        $path = $request->attachment;

        if(!$path)
            abort(404);

        $exists = Storage::disk('')->has($path);

        if(!$exists)
            abort(404);

        redirect()->back();

        return response()->download(storage_path('app/'. $path));
    }

}
