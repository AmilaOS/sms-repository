<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('institute_name');
            $table->string('institute_address');
            $table->string('institute_contact_1')->unique();
            $table->string('institute__contact_2')->nullable()->unique();
            $table->string('institute_location');
            $table->string('institute_owner');
            $table->string('institute_ower_contact')->unique();
            $table->string('institute_staus')->default(1);
            $table->string('institute_student_amount')->nullable();
            $table->string('institute_type');
            $table->string('institute_short_code')->unique();
            $table->string('institute_agreement_id')->unique();
            $table->string('institute_contacted_person');
            $table->string('institute_contacted_person_mobile')->unique();
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
        Schema::dropIfExists('institutes');
    }
}
