<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classrooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('room_number')->unique();
            $table->string('room_name')->unique();
            $table->string('room_student_amount')->nullable();
            $table->string('room_description')->nullable();
            $table->string('room_category')->nullable();
            $table->string('room_status')->default(1);
            $table->string('room_institute');
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
        Schema::dropIfExists('classrooms');
    }
}
