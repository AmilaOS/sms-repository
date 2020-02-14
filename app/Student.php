<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=[
    	'student_name',
    	'student_age',
    	'student_type',
    	'student_status',
    	'student_institute',
    	'student_private_contact',
    	'student_guardian_contact',
    	'student_address',
    	'student_grade',
    	'student_dob',
    	'student_nic',
    	'student_image',
    	'student_location',
    	'student_barcode',
        'student_remarks',
        'student_gender',
    	'created_by'
    ];
}
