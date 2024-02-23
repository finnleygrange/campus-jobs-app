<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timesheet extends Model
{
    use HasFactory;

    protected $fillable = [
        'timesheet_id',
        'timesheet_student_id',
        'timesheet_job_id',
        'timesheet_pay_rate',
        'timesheet_worked_hours',
        'timesheet_date_worked',
    ];
}
