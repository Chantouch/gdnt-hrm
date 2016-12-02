<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class JobsHistory extends Model
{
    protected $table = 'public_private_history_jobs';
    protected $fillable = [
        'phj_custom1',
        'phj_custom2',
        'phj_department',
        'phj_emp_id',
        'phj_others',
        'phj_ministry_institute',
        'phj_end_date',
        'phj_start_date',
        'phj_type',
        'phj_occupation',
    ];
    protected $dates = ['phj_start_date', 'phj_end_date'];
    protected $guarded = ['_method'];

//    public function setPHJStartDateAttribute()
//    {
//        Carbon::parse($this->attributes['phj_start_date'])->format('Y-m-d');
//    }

    public function getPHJStartDateAttribute()
    {
        return $this->attributes['phj_start_date'] = Carbon::parse($this->attributes['phj_start_date'])->format('Y-m-d');
    }

//    public function setPHJEndDateAttribute()
//    {
//        Carbon::parse($this->attributes['phj_end_date'])->format('Y-m-d');
//    }

    public function getPHJEndDateAttribute()
    {
        return $this->attributes['phj_end_date'] = Carbon::parse($this->attributes['phj_end_date'])->format('Y-m-d');
    }
}
