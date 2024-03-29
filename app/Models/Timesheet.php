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
        'worked_hours',
        'week_commencing',
        'line_manager',
    ];
}
