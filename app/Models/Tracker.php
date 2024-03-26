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
        'manager_id',
        'week_commencing',
        'visa_end_date',
        'worked_hours',
        'notes',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    // Define the relationship with the Job model
    public function job()
    {
        return $this->belongsTo(Job::class, 'job_id');
    }

    // Define the relationship with the LineManager model
    public function line_manager()
    {
        return $this->belongsTo(LineManager::class, 'line_manager_id');
    }
}