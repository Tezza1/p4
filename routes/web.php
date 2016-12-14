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
// Route::get('/logout','Auth\LoginController@logout')->name('logout');
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
Route::resource('prospects', 'ProspectController');

// REP CONTROLLER --------------------------------------------------------
Route::resource('reps', 'RepController');

// DATABASE --------------------------------------------------------------- 

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

if(App::environment('local')) {

    Route::get('/drop', function() {

        DB::statement('DROP database p4');
        DB::statement('CREATE database p4');

        return 'Dropped p4; created p4.';
    });

};

