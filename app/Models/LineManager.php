<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LineManager extends Model
{
    use HasFactory;

    protected $fillable = [
        'line_manager_id',
        'line_manager_name',
        'line_manager_email',
    ];
}
