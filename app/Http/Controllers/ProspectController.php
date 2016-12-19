<?php

namespace p4\Http\Controllers;

use Illuminate\Http\Request;
# add these to work with Eloquent
use DB;
use Carbon;
use p4\Prospect;
use p4\Rep;
use Session;

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

        $prospects = Prospect::with('rep')->get()->sortBy("prospect");
        //$prospects = $prospects::orderBy('prospect');
        //dump($prospects->toArray());

        return view("prospects.index")->with([
        'prospects' => $prospects
        ]);
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
            'team' => 'string|min:3|max:50|required',
            'consultant' => 'string|min:3|max:50|required',
            'prospect' => 'string|min:3|max:50|required',
            'contact' => 'string|min:3|max:50|required',
         ]);

        $rep = new Rep;
        $rep->rep = $request->rep;
        $rep->team = $request->team;
        $rep->save();

        $prospect = new Prospect;
        $prospect->rep()->associate($rep); //associate propsect with rep
        $prospect->consultant = $request->consultant;
        $prospect->prospect = $request->prospect;
        $prospect->contact = $request->contact;
        $prospect->industry = $request->industry;
        $prospect->region = $request->region;
        $prospect->save();


        // send confirmation message
        Session::flash('flash_message', 'The propsect '.$prospect->prospect.' was added.');

        return redirect("/prospects");
    }

    // SHOW ----------------------------------------------------------------
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function show($id)
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
         $prospect = Prospect::find($id);
         // dump($prospect->toArray());
  
        return view('prospects.edit')->with([
            'prospect' => $prospect,
        ]);
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
       // validate form input -------------------
        $this->validate($request, [
            'consultant' => 'string|min:3|max:50|required',
            'prospect' => 'string|min:3|max:50|required',
            'contact' => 'string|min:3|max:50|required',
         ]);
        
       // Find and update
        $prospect = Prospect::find($request->id);
        $prospect->consultant = $request->consultant;
        $prospect->prospect = $request->prospect;
        $prospect->contact = $request->contact;
        $prospect->industry = $request->industry;
        $prospect->region = $request->region;
        $prospect->save();
        
        // send confirmation message
        Session::flash('flash_message', 'Your changes to '.$prospect->prospect.' were saved.');
        
        return redirect("prospects");
    }

    // DESTROY ----------------------------------------------------------
    
    // confirm deleteion
    public function delete($id) {

        $prospect = Prospect::find($id);

        return view('prospects.delete')->with('prospect', $prospect);
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find and delete
        $prospect = Prospect::find($id);
        $prospect->delete();

       // send confirmation message
        Session::flash('flash_message', $prospect->prospect.' was deleted.');

        return redirect('/prospects');
    }
     
}
