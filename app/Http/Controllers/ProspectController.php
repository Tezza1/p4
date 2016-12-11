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
        return view("prospects");
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

        DB::table('prospects')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'rep' => 'test',
	        'consultant' => 'test',
	        'region' => 'test',
	        'company' => 'Bayer test',
	        'industry' => 'pharmaceutical',
	        'contact' => 'Ms. Test',
	        'typeTraining' => 'communications',
	        'potential' => '40',
        ]); 
        
        # Instantiate a new Book Model object
        $prospect = new Prospect();
        
        # Set the parameters
        # Note how each parameter corresponds to a field in the table
        $prospect->$_POST["rep"];
        $prospect->consultant = 'Michael Jones';
        $prospect->region = 'kansai';
        $prospect->company = 'Sony';
        $prospect->industry = 'electronics';
        $prospect->contact = 'Mr. Nakajima';
        $prospect->typeTraining = 'leadership';
        $prospect->potential = 60;

        # Invoke the Eloquent save() method
        # This will generate a new row in the `books` table, with the above data
        $prospect->save();       

        return view("prospects");
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

        # Instantiate a new Book Prospect object
        $prospect = new Prospect();

        # Set the parameters
        # Note how each parameter corresponds to a field in the table
        $prospect->$request->input('rep');
        $prospect->consultant = 'Michael Jones';
        $prospect->region = 'kansai';
        $prospect->company = 'Sony';
        $prospect->industry = 'electronics';
        $prospect->contact = 'Mr. Nakajima';
        $prospect->typeTraining = 'leadership';
        $prospect->potential = 60;

        # Invoke the Eloquent save() method
        # This will generate a new row in the `books` table, with the above data
        $prospect->save();       


        return view("prospects");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return ("New propsect showed");

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
        return ("New propsect deleted");
    }
}
