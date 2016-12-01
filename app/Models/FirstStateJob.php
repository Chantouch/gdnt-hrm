<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class FirstStateJob extends Model
{
    protected $table = 'first_state_jobs';

    protected $dates = [
        'fsj_permanent_staff_date',
    ];
    protected $fillable = [
        'fsj_custom1', 'fsj_custom2', 'fsj_department_id', 'fsj_department_unit_id', 'fsj_emp_id', 'fsj_frame_id',
        'fsj_ministry_id', 'fsj_occupation_id', 'fsj_office_id', 'fsj_others', 'fsj_permanent_staff_date', 'fsj_start_date',
    ];

    public function getFSJStartDateAttribute()
    {
        return $this->attributes['fsj_start_date'] = Carbon::parse($this->attributes['fsj_start_date'])->format('Y-m-d');
    }

    public function getFSJPermanentStaffDateAttribute()
    {
        return $this->attributes['fsj_permanent_staff_date'] = Carbon::parse($this->attributes['fsj_permanent_staff_date'])->format('Y-m-d');
    }

    public static function rules()
    {
        return [
            'fsj_start_date' => 'required'
        ];
    }

    public function frame()
    {
        return $this->hasOne(Frame::class, 'fsj_frame_id');
    }

    public function employer()
    {
        return $this->hasMany(Employer::class);
    }

    public function getFrameAttribute()
    {
        return $this->frame()->pluck('id');
    }
}
