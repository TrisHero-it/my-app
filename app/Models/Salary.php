<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_position_id',
        'travel_allowance',
        'eat_allowance',
        'basic_salary',
        'kpi',
    ];
}
