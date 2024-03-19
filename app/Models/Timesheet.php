<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timesheet extends Model
{
    use HasFactory;

    protected $fillable = [
        'timesheet_id',
        'student_id',
        'job_id',
        'pay_rate',
        'worked_hours',
        'date_worked',
        'manager_id'
    ];
}
