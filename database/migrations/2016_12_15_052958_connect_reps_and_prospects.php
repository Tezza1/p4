<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectRepsAndProspects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('prospects', function (Blueprint $table) {

            // Remove the field associated with reps
            $table->dropColumn('rep');

            // Add a new INT field called `author_id` that has to be unsigned (i.e. positive)
            $table->integer('rep_id')->unsigned();

            // This field as a foreign key that connects to the `id` field in the `reps` table
            $table->foreign('rep_id')->references('id')->on('reps');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('prospects', function (Blueprint $table) {

            # ref: http://laravel.com/docs/migrations#dropping-indexes
            # combine tablename + fk field name + the word "foreign"
            $table->dropForeign('prospects_rep_id_foreign');

            $table->dropColumn('rep_id');
        });
    }
}
