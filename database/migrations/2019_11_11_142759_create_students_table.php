<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
           $table->bigIncrements('id');
           $table->string('student_name');
           $table->string('student_address');
           $table->string('student_location')->nullable();
           $table->Integer('student_age');
           $table->string('student_dob');
           $table->string('student_nic')->nullable();
           $table->string('student_grade');
           $table->Integer('student_private_contact')->nullable()->unique();
           $table->Integer('student_guardian_contact')->nullable()->unique();
           $table->string('student_type');
           $table->string('student_remarks')->nullable();
           $table->string('student_status')->default(1);
           $table->Integer('student_image')->default(0);
           $table->string('student_barcode')->unique();
           $table->string('student_institute')->default('No Company');
           $table->string('student_gender');
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
        Schema::dropIfExists('students');
    }
}
