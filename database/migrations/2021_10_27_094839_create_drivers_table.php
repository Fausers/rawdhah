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
            $table->text('fname');
            $table->text('mname');
            $table->text('lname');
            $table->date('dob');
            $table->date('license_date');
            $table->text('licence_type');
            $table->integer('phone_number');
            $table->text('e_address');
            $table->text('year_experience');
            $table->string('passport');
            $table->string('nida');
            $table->string('licence');
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
