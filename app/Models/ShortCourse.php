<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class ShortCourse extends Model
{
    protected $table = 'short_courses';
    protected $dates = ['courses_start_date', 'courses_end_date'];
    protected $guarded = ['_method'];
    protected $fillable = [
        'courses_custom1',
        'courses_custom2',
        'courses_country',
        'courses_emp_id',
        'courses_others',
        'courses_degree',
        'courses_end_date',
        'courses_start_date',
        'courses_level_edu',
        'courses_school'
    ];


    public function setCoursesStartDateAttribute($value)
    {
        $this->attributes['courses_start_date'] = Carbon::createFromFormat('Y-m-d', $value);
    }

    public function setCoursesEndDateAttribute($value)
    {
        $this->attributes['courses_end_date'] = Carbon::createFromFormat('Y-m-d', $value);
    }


    public function getCoursesEndDateAttribute()
    {
        return $this->attributes['courses_end_date'] = Carbon::parse($this->attributes['courses_end_date'])->format('Y-m-d');
    }

    public function getCoursesStartDateAttribute()
    {
        return $this->attributes['courses_start_date'] = Carbon::parse($this->attributes['courses_start_date'])->format('Y-m-d');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}
