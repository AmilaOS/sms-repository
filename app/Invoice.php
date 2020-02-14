<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
	Protected $fillable = [
        'invoice_type',
    	'invoice_student_id',
    	'invoice_student_name',
    	'invoice_lecture_id',
    	'invoice_lecture_title',
    	'invoice_amount',
    	'invoice_amount_received',
    	'invoice_amount_due',
    	'created_by',
    	'institute',
        'invoice_status'
    ];
}
