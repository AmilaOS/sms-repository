<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('created_by');
            $table->string('invoice_status')->default(1);
            $table->string('invoice_type');
            $table->string('invoice_student_id');
            $table->string('invoice_student_name');
            $table->string('invoice_lecture_id');
            $table->string('invoice_lecture_title');
            $table->double('invoice_amount', 8, 2)->nullable();
            $table->double('invoice_amount_received', 8, 2)->nullable();
            $table->double('invoice_amount_due', 8, 2)->nullable();
            $table->string('institute');
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
        Schema::dropIfExists('invoices');
    }
}
