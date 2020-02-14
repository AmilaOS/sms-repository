<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LectureOperator extends Model
{
    Protected $fillable = [
    	'lecture_hall_operator_name',
    	'lecture_hall_operator_contact',
    	'lecture_hall_operator_lec_room',
    	'lecture_hall_operator_info',
    	'lecture_hall_operator_status',
    	'created_by'
    ];
}
