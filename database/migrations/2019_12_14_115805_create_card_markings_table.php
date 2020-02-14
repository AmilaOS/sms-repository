<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardMarkingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_markings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('student_barcode');
            $table->string('payment_state');
            $table->string('marking_student_id');
            $table->string('marking_institute');
            $table->string('marking_operator_id');
            $table->string('marking_tute_state');
            $table->string('marking_remarks')->defalt("-");
            $table->string('marking_lecture_id');
            $table->string('marking_lecture_title');
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
        Schema::dropIfExists('card_markings');
    }
}
