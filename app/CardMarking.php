<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CardMarking extends Model
{
    protected $filable = [
    	'student_barcode',
    	'payment_state',
        'marking_student_id',
        'marking_institute',
        'marking_operator_id',
        'marking_tute_state',
        'marking_remarks',
        'marking_lecture_id',
        'marking_lecture_title',
        'created_by'
    ];
}
