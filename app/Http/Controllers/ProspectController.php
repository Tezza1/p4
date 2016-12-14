<?php

namespace p4\Http\Controllers;

use Illuminate\Http\Request;
# add these to work with Eloquent
use DB;
use Carbon;
use p4\Prospect;

class ProspectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prospects = Prospect::all();
       
        return view('prospects')->with('prospects', $prospects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        # validate form input -------------------
        $this->validate($request, [
            'propsect' => 'string|min:3|max:50',
         ]);
/*
        DB::table('prospects')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'rep' => $request->input('rep'),
	        'consultant' => 'test',
	        'region' => 'test',
	        'company' => 'Bayer test',
	        'industry' => 'pharmaceutical',
	        'contact' => 'Ms. Test',
	        'typeTraining' => 'communications',
	        'potential' => '40',
        ]);
*/
        return view("prospects.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        # validate form input -------------------
        $this->validate($request, [
            'propsect' => 'string|min:3|max:50|required',
         ]);

/*        # Instantiate a new Book Prospect object
        $prospect = new Prospect();

        # Set the parameters
        # Note how each parameter corresponds to a field in the table
        $prospect->rep = 'Mickey Mouse';
        $prospect->consultant = 'Michael Jones';
        $prospect->region = 'kansai';
        $prospect->company = 'Sony';
        $prospect->industry = 'electronics';
        $prospect->contact = 'Mr. Nakajima';
        $prospect->typeTraining = 'leadership';
        $prospect->potential = 60;

        # Invoke the Eloquent save() method
        # This will generate a new row in the `prospects` table, with the above data
        $prospect->save();*/


        return view("prospects.create");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
/*         $prospect = Prospect::find($id);

        if(is_null($prospect) {
            Session::flash('message','Company not found');
            return redirect('/prospects');
        }

        return view('prospectSearch.show')->with([
            'prospect' => $prospect,
        ]);
		
*/

		$prospects = Prospect::all();
		dump($prospects);
		
		return view("prospects.show")->with([
        'prospects' => $prospects
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
        //
		return view("prospects.edit");
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
		return view("prospects.update");
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
        return view("prospects.delete");
    }
}
