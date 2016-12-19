<?php

use Illuminate\Database\Seeder;

class RepsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reps')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'rep' => 'jill',
            'team' => 'one',
        ]);

        DB::table('reps')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'rep' => 'jamal',
            'team' => 'two',
        ]);

        DB::table('reps')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'rep' => 'terry',
            'team' => 'one',
        ]);

        DB::table('reps')->insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'rep' => 'susan',
            'team' => 'three',
        ]);

    }
}
