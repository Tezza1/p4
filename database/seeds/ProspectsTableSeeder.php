<?php

use Illuminate\Database\Seeder;

class ProspectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prospects')->insert([
	        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'rep' => 'jill',
	        'consultant' => 'Bob Smith',
			'prospect' => 'Bayer Pharma',
	        'contact' => 'Ms. Suzuki',
			'industry' => 'pharma',
			'region' => 'kanto',
    	]);

        DB::table('prospects')->insert([
	        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'rep' => 'jamal',
	        'consultant' => 'Bob Smith',
			'prospect' => 'Goldman Sachs',
			'contact' => 'Mr. Nakayama',
			'industry' => 'financial',
	        'region' => 'kanto',
    	]);

        DB::table('prospects')->insert([
	        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'rep' => 'terry',
	        'consultant' => 'Peter Maxwell',
			'prospect' => 'Toyota',
			'contact' => 'Ms. Ito',
			'industry' => 'auto',
	        'region' => 'tokai',
    	]);

    	DB::table('prospects')->insert([
	        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'rep' => 'jill',
	        'consultant' => 'Peter Maxwell',
	        'prospect' => 'Panasonic',
			'contact' => 'Mr. Shimizu',
			'industry' => 'telecom',
			'region' => 'kansai',
    	]);
    }
}
