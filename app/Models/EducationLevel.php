<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class EducationLevel extends Model
{
    protected $table = 'education_levels';
    protected $dates = ['el_start_date', 'el_end_date'];
    protected $guarded = ['_method'];
    protected $fillable = [
        'el_custom1',
        'el_custom2',
        'el_country',
        'el_emp_id',
        'el_others',
        'el_degree',
        'el_end_date',
        'el_start_date',
        'el_level_edu',
        'el_school',
    ];

    public function getELStartDateAttribute()
    {
        return $this->attributes['el_start_date'] = Carbon::parse($this->attributes['el_start_date'])->format('Y-m-d');
    }

    public function getELEndDateAttribute()
    {
        return $this->attributes['el_end_date'] = Carbon::parse($this->attributes['el_end_date'])->format('Y-m-d');
    }
}
