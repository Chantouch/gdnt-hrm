<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FirstStateJob extends Model
{
    protected $table = 'first_state_jobs';
    protected $dates = [
        'permanent_staff_date', 'start_date'
    ];
    protected $fillable = [
        'custom1', 'custom2', 'department_id', 'department_unit_id', 'emp_id', 'frame_id',
        'ministry_id', 'occupation_id', 'office_id', 'others', 'permanent_staff_date', 'start_date',
    ];
}
