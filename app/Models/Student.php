<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;


    protected $fillable = [
        'student_id',
        'student_first_name',
        'student_last_name',
        'student_email_address',
        'visa_end_date',
    ];
}
