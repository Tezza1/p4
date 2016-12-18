<?php

use Illuminate\Database\Seeder;
use p4\Rep;

class ProspectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rep_id = Rep::where('rep','=','jill')->pluck('id')->first();

        DB::table('prospects')->insert([
	        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'rep_id' => $rep_id,
	        'consultant' => 'Bob Smith',
			'prospect' => 'Bayer Pharma',
	        'contact' => 'Ms. Suzuki',
			'industry' => 'pharma',
			'region' => 'kanto',
    	]);

        $rep_id = Rep::where('rep','=','jamal')->pluck('id')->first();

        DB::table('prospects')->insert([
	        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'rep_id' => $rep_id,
	        'consultant' => 'Bob Smith',
			'prospect' => 'Goldman Sachs',
			'contact' => 'Mr. Nakayama',
			'industry' => 'financial',
	        'region' => 'kanto',
    	]);

        $rep_id = Rep::where('rep','=','terry')->pluck('id')->first();

        DB::table('prospects')->insert([
	        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'rep_id' => $rep_id,
	        'consultant' => 'Peter Maxwell',
			'prospect' => 'Toyota',
			'contact' => 'Ms. Ito',
			'industry' => 'auto',
	        'region' => 'tokai',
    	]);

        $rep_id = Rep::where('rep','=','susan')->pluck('id')->first();

    	DB::table('prospects')->insert([
	        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'rep_id' => $rep_id,
	        'consultant' => 'Peter Maxwell',
	        'prospect' => 'Panasonic',
			'contact' => 'Mr. Shimizu',
			'industry' => 'telecom',
			'region' => 'kansai',
    	]);
    }
}
