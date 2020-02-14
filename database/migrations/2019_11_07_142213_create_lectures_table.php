<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLecturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lectures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('lecture_name');
            $table->string('created_by');
            $table->string('lecture_status')->default(1);
            $table->string('lecture_start_date');
            $table->string('lecture_end_date')->nullable();
            $table->string('lecture_lecturer');
            $table->string('lecture_classroom');
            $table->string('lecture_more_information')->nullable();
            $table->string('lecture_hall_operator');
            $table->string('lecture_institute');
            $table->string('lecture_fee');
            $table->string('lecturer_name');
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
        Schema::dropIfExists('lectures');
    }
}
