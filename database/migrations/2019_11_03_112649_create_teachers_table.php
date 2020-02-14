<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('teacher_status')->default(1);
            $table->string('created_by');
            $table->string('teacher_title');
            $table->string('teacher_name');
            $table->string('teacher_dob')->nullable();
            $table->string('teacher_group');
            $table->string('teacher_nic')->unique();
            $table->string('teacher_address')->nullable();
            $table->string('teacher_mobile')->unique();
            $table->string('teacher_subject')->nullable();
            $table->string('teacher_image')->nullable();
            $table->string('teacher_bank_account')->nullable();
            $table->string('teacher_notes')->nullable();
            $table->string('teacher_institute');
            $table->string('revenue_percentage');
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
        Schema::dropIfExists('teachers');
    }
}
