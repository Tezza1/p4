<?php

namespace p4\Http\Controllers;

use Illuminate\Http\Request;
# add these to work with Eloquent
use DB;
use Carbon;
use p4\Prospect;

class ProspectController extends Controller
{
    // INDEX -----------------------------------------------------------
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $prospects = Prospect::all();
        //dump($prospects);

        return view("prospects.index")->with([
        'prospects' => $prospects
        ]);
        //return view('prospects.index')->with('prospects', $prospects);
    }

    // CREATE -----------------------------------------------------------
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        return view("prospects.create");
    }

    // STORE ----------------------------------------------------------
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // validate form input -------------------
        $this->validate($request, [
            'rep' => 'string|min:3|max:50|required',
            'consultant' => 'string|min:3|max:50|required',
            'prospect' => 'string|min:3|max:50|required',
            'contact' => 'string|min:3|max:50|required',
         ]);

        $prospect = new Prospect();
        $prospect->rep = $request->rep;
        $prospect->consultant = $request->consultant;
        $prospect->prospect = $request->prospect;
        $prospect->contact = $request->contact;
        $prospect->industry = $request->industry;
        $prospect->region = $request->region;
        $prospect->save();

        //Session::flash('flash_message', 'The propsect '.$propsect->prospect.' was added.');

        return redirect("/prospects");
    }

    // SHOW ----------------------------------------------------------------
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prospect = Prospect::find($id);

        return view('prospects.show')->with([
            'prospect' => $prospect,
        ]);
    }

    // EDIT ------------------------------------------------------------
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::find($id);

        return view("prospects.edit");
    }

    // UPDATE ------------------------------------------------------------
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
        return view("prospects.update");
    }

    // DESTROY ----------------------------------------------------------
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        return view("prospects.delete");
    }
}
