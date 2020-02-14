<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $fillable = [
        'room_number',
        'room_name',
        'room_institute',
        'room_student_amount',
        'room_description',
        'room_category',
        'room_status'
    ];
}
