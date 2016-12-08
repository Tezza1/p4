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

// PROSPECT CONTROLLER
/*
Route::get('prospects', 'ProspectController@index')->name('prospects.index');
Route::get('/prospects/create', 'ProspectController@create')->name('propsects.create');
Route::post('/prospects/store', 'PropsectController@store')->name('propsects.store');
Route::get('/prospects/{propsect}', 'PropsectController@show')->name('prospects.show');
Route::get('/prospects/{prospect}/edit', 'ProspectController@edit')->name('prospects.edit');
Route::put('/prospects/{prospect}', 'ProspectController@update')->name('prospects.update');
Route::delete('/prospects/{prospect}', 'ProspectController@destroy')->name('prospects.destroy');
*/
Route::resource('prospects', 'ProspectController');

// REP CONTROLLER
/*
Route::get('reps', 'RepController@index')->name('reps.index');
Route::get('/reps/create', 'RepController@create')->name('reps.create');
Route::post('/reps/store', 'RepController@store')->name('reps.store');
Route::get('/reps/{propsect}', 'RepController@show')->name('reps.show');
Route::get('/reps/{prospect}/edit', 'RepController@edit')->name('reps.edit');
Route::put('/reps/{prospect}', 'RepController@update')->name('reps.update');
Route::delete('/reps/{prospect}', 'RepController@destroy')->name('reps.destroy');
*/
Route::resource('reps', 'RepController');

Route::get("display", function () {
    return view("display");
});

// Test database connection
Route::get('/debug', function() {
	echo '<pre>';
	echo '<h1>Environment</h1>';
	echo App::environment().'</h1>';
	echo '<h1>Debugging?</h1>';

	if(config('app.debug'))
		echo "Yes";
	else
		echo "No";

	echo '<h1>Database Config</h1>';

	echo '<h1>Test Database Connection</h1>';
	try {
		$results = DB::select('SHOW DATABASES;');
		echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
		echo "<br><br>Your Databases:<br><br>"; print_r($results);
	} catch (Exception $e) {
		echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n"; } echo '</pre>'; });

