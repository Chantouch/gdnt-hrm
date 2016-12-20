<?php

namespace App\Models;

use Carbon\Carbon as Carbon;
use Illuminate\Database\Eloquent\Model as Model;

class OutFrameNoSalary extends Model
{
    protected $table = 'out_of_frame_no_salary_status';
    protected $fillable = [
        'fn_custom1',
        'fn_custom2',
        'fn_department',
        'fn_emp_id',
        'fn_others',
        'fn_position',
        'fn_end_date',
        'fn_start_date',
        'fn_type',
    ];
    protected $dates = ['fn_start_date', 'fn_end_date'];
    protected $guarded = ['_method'];

//    public function setFNStartDateAttribute()
//    {
//        return $this->attributes['fn_start_date'] = Carbon::parse($this->attributes['fn_start_date'])->format('Y-m-d');
//    }

    public function getFNStartDateAttribute()
    {
        return $this->attributes['fn_start_date'] = Carbon::parse($this->attributes['fn_start_date'])->format('Y-m-d');
    }

    public function setFNEndDateAttribute($value)
    {
        $this->attributes['fn_end_date'] = trim($value) !== '' ? Carbon::createFromFormat('Y-m-d', $value) : null;
    }

    public function setFNStartDateAttribute($value)
    {
        $this->attributes['fn_start_date'] = trim($value !== '' ? Carbon::createFromFormat('Y-m-d', $value) : null);
    }

    public function getFNEndDateAttribute()
    {
        return $this->attributes['fn_end_date'] = Carbon::parse($this->attributes['fn_end_date'])->format('Y-m-d');
    }

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}
