<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_id',
        'job_title',
        'cost_code',
        'post_number',
        'pay_rate_to_oct_23',
        'pay_rate_after_oct_23',
    ];
}
