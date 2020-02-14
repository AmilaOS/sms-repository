<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'teacher_status',
        'created_by',
        'teacher_title',
        'teacher_name',
        'teacher_dob',
        'teacher_group',
        'teacher_address',
        'teacher_mobile',
        'teacher_subject',
        'teacher_image',
        'teacher_bank_account',
        'teacher_notes',
        'teacher_nic',
        'teacher_institute',
        'revenue_percentage'
    ];
}
