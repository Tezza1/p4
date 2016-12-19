<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get("/", function () {
    return view("home");
});

// AUTHENTIFICATION ------------------------------------------------------ 

Auth::routes();
Route::get('/logout','Auth\LoginController@logout')->name('logout');
Route::get('/home', 'HomeController@index');


Route::get('/show-login-status', function() {

    # You may access the authenticated user via the Auth facade
    $user = Auth::user();

    if($user)
        dump($user->toArray());
    else
        dump('You are not logged in.');

    return;
});


// PROSPECT CONTROLLER ---------------------------------------------------
// Index page to show all the prospects
Route::get('/prospects', 'ProspectController@index')->name('prospects.index')->middleware('auth');

// Show a form to create a new prospect
Route::get('/prospects/create', 'ProspectController@create')->name('prospects.create')->middleware('auth');

// Process the form to create a new prospect
Route::post('/prospects', 'ProspectController@store')->name('prospects.store');

# Show an individual prospect
Route::get('/prospects/{prospect}', 'ProspectController@show')->name('prospects.show');

# Show form to edit a prospect
Route::get('/prospects/{id}/edit', 'ProspectController@edit')->name('prospects.edit');

# Process form to edit a prospect
Route::put('/prospects/{id}', 'ProspectController@update')->name('prospects.update');

# Get route to confirm deletion of prospect
Route::get('/prospects/{id}/delete', 'ProspectController@delete')->name('prospects.destroy');

# Delete route to actually destroy the prospect
Route::delete('/prospects/{id}', 'ProspectController@destroy')->name('prospects.destroy');

//Route::resource('prospects', 'ProspectController');

// REP CONTROLLER --------------------------------------------------------
// Index page to show all the prospects
Route::get('/reps', 'RepController@index')->name('reps.index');

# Show an individual prospect
Route::get('/reps/{prospect}', 'RepController@show')->name('reps.show');

# Show form to edit a prospect
Route::get('/reps/{id}/edit', 'RepController@edit')->name('reps.edit');

# Process form to edit a prospect
Route::put('/reps/{id}', 'RepController@update')->name('reps.update');

# Get route to confirm deletion of prospect
Route::get('/reps/{id}/delete', 'RepController@delete')->name('reps.destroy');




