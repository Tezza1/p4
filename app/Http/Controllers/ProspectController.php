<?php

namespace p4\Http\Controllers;

use Illuminate\Http\Request;
# add these to work with Eloquent
use DB;
use Carbon;
use p4\Prospect;
use p4\Rep;

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

        # Eager load the author with the book
        $prospects = Prospect::with('rep')->get();

        //dump($prospects->toArray());

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
            'team' => 'string|min:3|max:50|required',
            'consultant' => 'string|min:3|max:50|required',
            'prospect' => 'string|min:3|max:50|required',
            'contact' => 'string|min:3|max:50|required',
         ]);

        $rep = new Rep;
        $rep->rep = $request->rep;
        $rep->team = $request->team;
        $rep->region = $request->region;
        $rep->save();

        $prospect = new Prospect;
        $prospect->rep()->associate($rep); //associate propsect with rep
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

        # Get the first book as an example
        //$prospects = Prospect::where("rep");
        //dump($prospects);

        # Eager load the author with the book
        //$prospects = Prospect::where("industry", "auto")->where("region", "")->get();
        //$prospects = Prospect::where("prospect", "Bayer Pharma")->get();
        // Retrieve a model by its primary key...
//$flight = App\Flight::find(1);
        $prospects = Prospect::find($id);
        dump($prospects);

// Retrieve the first model matching the query constraints...
//$flight = App\Flight::where('active', 1)->first();
//You may also call the find method with an array of primary keys, which will return a collection of the matching records:

//$flights = App\Flight::find([1, 2, 3])

        return view("prospects.show")->with([
        'prospects' => $prospects
        ]);
        // get prospects where there is a rep
         //$prospects = Prospect::with('rep')->get();
        //dump($prospect->toArray());
    }

    // public function show($id)
    // {
    //     $book = Book::find($id);

    //     if(is_null($book)) {
    //         Session::flash('message','Book not found');
    //         return redirect('/books');
    //     }

    //     return view('book.show')->with([
    //         'book' => $book,
    //     ]);
    // }

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
