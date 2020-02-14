<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFreeCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('free_cards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('student_id');
            $table->string('student_name');
            $table->string('created_by');
            $table->string('lecture_id');
            $table->string('lecture_name');
            $table->string('remarks');
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
        Schema::dropIfExists('free_cards');
    }
}
