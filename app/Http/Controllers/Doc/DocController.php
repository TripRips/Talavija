<?php

namespace App\Http\Controllers\Doc;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Doc;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DocController extends Controller
{
    public function create()
    {
        $docs = Doc::all() ;
        return view('vendor.doc-add', ['docs'=>$docs]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $doc = new Doc() ;

        if($request->file('document'))
        {
            $file=$request->file('document');
            $filename=time().'.'.$file->getClientOriginalExtension();
            $request->document->move('public/storage/', $filename);
            $doc->document=$filename;
        }

        $doc->date = $request->input('date');
        $doc->time = $request->input('time') ;
        $doc->name = $request->input('name') ;
        $doc->status = $request->input('status') ;

        if($doc->status == "Neapstiprināts")
            $doc->color = "text-danger";
        else
            $doc->color = "text-green";

        $doc->save() ;
        return redirect('/doc/view') ;
    }

    public function view()
    {
        $docs = Doc::all() ;
        return view('vendor.doc-view', ['docs'=>$docs]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $doc = Doc::find($id);
        $docs = Doc::all() ;
        return view('vendor.doc-edit', ['docs'=>$docs, 'doc'=>$doc]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $document)
    {
        $doc = Doc::find($id);

        if($request->file('document'))
        {
            File::delete(public_path('public/storage/' .$document));
            $file = $request->file('document');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $request->document->move('public/storage/', $filename);
            $doc->document = $filename;
        }

        $doc->date = $request->input('date');
        $doc->time = $request->input('time') ;
        $doc->name = $request->input('name') ;
        $doc->status = $request->input('status') ;

        if($doc->status == "Neapstiprināts")
            $doc->color = "text-danger";
        else
            $doc->color = "text-green";

        $doc->save() ;
        return redirect('/doc/view') ;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $document)
    {
        $doc = Doc::find($id);
        File::delete(public_path('public/storage/' .$document));
        $doc->delete();
        return redirect('/doc/view') ;
    }
}
