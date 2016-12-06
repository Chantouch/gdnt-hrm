<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class NoSalaryStatus extends Model
{
    protected $table = 'no_salary_status';
    protected $dates = ['nss_start_date', 'nss_end_date'];
    protected $guarded = ['_method'];
    protected $fillable = [
        'nss_emp_id',
        'nss_department',
        'nss_others',
        'nss_end_date',
        'nss_start_date',
        'nss_custom1',
        'nss_custom2',
    ];

    public function getNSSStartDateAttribute()
    {
        return $this->attributes['nss_start_date'] = Carbon::parse($this->attributes['nss_start_date'])->format('Y-m-d');
    }

    public function getNSSEndDateAttribute()
    {
        return $this->attributes['nss_end_date'] = Carbon::parse($this->attributes['nss_end_date'])->format('Y-m-d');
    }
}
