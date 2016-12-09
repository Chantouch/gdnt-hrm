<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class DegreeSpecialize extends Model
{
    protected $table = 'degree_specializes';
    protected $dates = ['ds_start_date', 'ds_end_date'];
    protected $guarded = ['_method'];
    protected $fillable = [
        'ds_custom1',
        'ds_custom2',
        'ds_country',
        'ds_emp_id',
        'ds_others',
        'ds_degree',
        'ds_end_date',
        'ds_start_date',
        'ds_level_edu',
        'ds_school'
    ];


    public function setDsStartDateAttribute($value)
    {
        $this->attributes['ds_start_date'] = Carbon::createFromFormat('Y-m-d', $value);
    }

    public function setDsEndDateAttribute($value)
    {
        $this->attributes['ds_end_date'] = Carbon::createFromFormat('Y-m-d', $value);
    }


    public function getDsEndDateAttribute()
    {
        return $this->attributes['ds_end_date'] = Carbon::parse($this->attributes['ds_end_date'])->format('Y-m-d');
    }

    public function getDsStartDateAttribute()
    {
        return $this->attributes['ds_start_date'] = Carbon::parse($this->attributes['ds_start_date'])->format('Y-m-d');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}
