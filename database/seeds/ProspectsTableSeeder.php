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
	        'rep' => 'Hiroki Honda',
	        'consultant' => 'Bob Smith',
	        'region' => 'Tokyo',
	        'company' => 'Bayer Pharma',
	        'industry' => 'pharmaceutical',
	        'contact' => 'Ms. Suzuki',
	        'typeTraining' => 'communications',
	        'potential' => '50',
    	]);

        DB::table('prospects')->insert([
	        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'rep' => 'Nobu Nakamura',
	        'consultant' => 'Bob Smith',
	        'region' => 'Tokyo',
	        'company' => 'Goldman Sachs',
	        'industry' => 'financial',
	        'contact' => 'Mr. Nakayama',
	        'typeTraining' => 'leadership',
	        'potential' => '80',
    	]);

        DB::table('prospects')->insert([
	        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'rep' => 'Shinichi Sato',
	        'consultant' => 'Peter Maxwell',
	        'region' => 'Tokai',
	        'company' => 'Toyota',
	        'industry' => 'automotive',
	        'contact' => 'Ms. Ito',
	        'typeTraining' => 'communications',
	        'potential' => '40',
    	]);

    	DB::table('prospects')->insert([
	        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
	        'rep' => 'Shinichi Sato',
	        'consultant' => 'Peter Maxwell',
	        'region' => 'Kansai',
	        'company' => 'Panasonic',
	        'industry' => 'electronic',
	        'contact' => 'Mr. Shimizu',
	        'typeTraining' => 'interculture',
	        'potential' => '80',
    	]);
    }
}
