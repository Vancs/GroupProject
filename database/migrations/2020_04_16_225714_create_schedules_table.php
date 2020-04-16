<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
          $table->bigIncrements('id');
          //Ex: Fall 2019
          $table->string('semester_and_year');
          $table->string('CRSRID');
          $table->string('code');
          $table->string('title');
          $table->string('credit');
          $table->date('start_date');
          $table->date('end_date');
          $table->string('class_days');
          $table->string('class_time');
          $table->date('final_day');
          $table->string('final_time');
          $table->integer('enrollment');
          $table->unsignedBigInteger('instructor_id');
          $table->foreign('instructor_id')->references('id')->on('instructors');
          $table->unsignedBigInteger('location_id');
          $table->foreign('location_id')->references('id')->on('locations');
          $table->string('comments');
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}
