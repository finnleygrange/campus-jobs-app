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
}