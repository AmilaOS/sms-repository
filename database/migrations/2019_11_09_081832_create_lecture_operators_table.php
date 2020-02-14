<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLectureOperatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecture_operators', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('lecture_hall_operator_name');
            $table->string('lecture_hall_operator_contact');
            $table->string('lecture_hall_operator_lec_room');
            $table->string('lecture_hall_operator_info')->nullable();
            $table->string('lecture_hall_operator_status')->default(1);
            $table->string('created_by');
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
        Schema::dropIfExists('lecture_operators');
    }
}
