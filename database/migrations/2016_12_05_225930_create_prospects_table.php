<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProspectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prospects', function (Blueprint $table) {

            # Increments method will make a Primary, Auto-Incrementing field.
            # Most tables start off this way
            $table->increments('id');

            # This generates two columns: `created_at` and `updated_at` to keep track of changes to a row
            $table->timestamps();

            # The rest of the fields:
            # string = varchar(255)
            $table->string('rep');
            $table->string('consultant');
            $table->integer('region');
            $table->string('company');
            $table->string('industry')->nullable();
            $table->string('contact')->nullable();
            $table->text('additionalInfo')->nullable();
            $table->string('typeTraining')->nullable();
            $table->integer('potential');
            $table->text('additionalInfo2')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('prospects');
    }
}
