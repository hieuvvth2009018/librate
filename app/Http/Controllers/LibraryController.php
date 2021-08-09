<?php

namespace App\Http\Controllers;

use App\Models\library;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $library = library::all();
        return view('library/list',[
            'list'=>$library,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('library/form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return library
     */
    public function store(Request $request)
    {
        $library = new library();
        /*$events->eventName = $request->get('eventName');
        $events->bandNames = $request->get('bandNames');
        $events->startDate = $request->get('startDate');
        $events->endDate = $request->get('endDate');
        $events->portfolio = $request->get('portfolio');
        $events->ticketPrice = $request->get('ticketPrice');
        $events->status = $request->get('status');*/
        $library->fill($request->all());
        $library->save();
        return redirect('/admin/library/list');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\library  $event
     * @return string
     */
    public function save(Request $request, $id)
    {
        $detaillibrary = library::find($id);
        $detaillibrary->update($request->all());
        $detaillibrary->save();
        return "Edit success";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\library  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(library $event){

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\library  $event
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function update($id)
    {
        $currentlibrary = library::find($id);
        return view('library/edit',[
            'current' => $currentlibrary
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\library  $event
     * @return string
     */
    public function delete($id)
    {
        $detaillibrary = library::find($id);
        $detaillibrary->delete();
        return  redirect('library/list');
    }
}
