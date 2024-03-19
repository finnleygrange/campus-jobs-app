<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracker extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'tracker_id',
        'student_id',
        'student_name',
        'student_email_address',
        'visa_end_date',
        'worked_hours',
        'manager_name',
        'notes',
    ];
}