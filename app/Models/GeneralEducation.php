<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model as Model;

class GeneralEducation extends Model
{
    protected $table = 'general_educations';
    protected $dates = ['ge_start_date', 'ge_end_date'];
    protected $guarded = ['_method'];
    protected $fillable = [
        'ge_custom1',
        'ge_custom2',
        'ge_country',
        'ge_emp_id',
        'ge_others',
        'ge_degree',
        'ge_end_date',
        'ge_start_date',
        'ge_level_edu',
        'ge_school'
    ];


    public function setGeStartDateAttribute($value)
    {
        $this->attributes['ge_start_date'] = Carbon::createFromFormat('Y-m-d', $value);
    }

    public function setGeEndDateAttribute($value)
    {
        $this->attributes['ge_end_date'] = Carbon::createFromFormat('Y-m-d', $value);
    }


    public function getGeEndDateAttribute()
    {
        return $this->attributes['ge_end_date'] = Carbon::parse($this->attributes['ge_end_date'])->format('Y-m-d');
    }

    public function getGeStartDateAttribute()
    {
        return $this->attributes['ge_start_date'] = Carbon::parse($this->attributes['ge_start_date'])->format('Y-m-d');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}
