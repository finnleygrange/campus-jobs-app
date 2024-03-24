<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'student_id',
        'job_id',
        'week_commencing',
        'assignment',
        'hours_requested',
        'line_manager_id',
        'status',
    ];

    // Define the relationship with the Student model
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
