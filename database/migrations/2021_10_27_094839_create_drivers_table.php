<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            //code added from here
            $table->text('fname')->unsigned()->nullable();
            $table->text('mname')->unsigned()->nullable();
            $table->text('lname')->unsigned()->nullable();
            $table->date('dob')->unsigned()->nullable();
            $table->date('license_date')->unsigned()->nullable();
            $table->text('licence_type')->unsigned()->nullable();
            $table->integer('phone_number')->unsigned()->nullable();
            $table->text('e_address')->unsigned()->nullable();
            $table->text('year_experience')->unsigned()->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('drivers');
    }
}
