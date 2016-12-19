<?php

namespace p4\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon;
use p4\Prospect;
use p4\Rep;
use Session;


class RepController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reps = Rep::all()->sortBy("rep");

        return view("reps.index")->with([
        'reps' => $reps,        
        ]);
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
        $rep = Rep::find($id);
  
        return view('reps.show')->with([
            'rep' => $rep,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rep = Rep::find($id);
  
        return view('reps.edit')->with([
            'rep' => $rep,
       ]);
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
        // validate form input -------------------
        $this->validate($request, [
            'rep' => 'string|min:3|max:50|required',
            'team' => 'string|min:3|max:50|required',
         ]);
        
       // Find and update
        $rep= Rep::find($request->id);
        $rep->rep = $request->rep;
        $rep->team = $request->team;
        $rep->save();
        
        // send confirmation message
        Session::flash('flash_message', 'Your changes to '.$rep->rep.' were saved.');
        
        return redirect("reps");
    }
    
    // confirm deleteion
    public function delete($id) {

        $rep = Rep::find($id);

        return view('reps.delete')->with('rep', $rep);
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
