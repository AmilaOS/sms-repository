<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    protected $fillable = [
        'lecture_name',
        'created_by',
        'lecture_status',
        'lecture_start_date',
        'lecture_end_date',
        'lecture_lecturer',
        'lecture_classroom',
        'lecture_more_information',
        'lecture_hall_operator',
        'lecture_institute',
        'lecture_fee',
        'lecturer_name'
    ];
}
