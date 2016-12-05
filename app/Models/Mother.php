<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model as Model;

class Mother extends Model
{
    protected $table = 'mothers';
    protected $fillable = [
        'm_custom1',
        'm_custom2',
        'm_address',
        'm_emp_id',
        'm_department',
        'm_others',
        'm_dob',
        'm_ethnic',
        'm_fn_en',
        'm_full_name',
        'm_job',
        'm_nationality',
        'm_pob',
        'm_status',
    ];

    /**
     * @return string
     */
    public function getMDOBAttribute()
    {
        return $this->attributes['m_dob'] = Carbon::parse($this->attributes['m_dob'])->format('Y-m-d');
    }

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}
