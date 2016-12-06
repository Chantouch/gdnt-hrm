<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model as Model;

class Children extends Model
{
    protected $table = 'children';
    protected $dates = [
        'child_dob'
    ];
    protected $fillable = [
        'child_address',
        'child_custom1',
        'child_custom2',
        'child_others',
        'child_dob',
        'child_emp_id',
        'child_ethnic',
        'child_fn_en',
        'child_full_name',
        'child_gender',
        'child_job',
        'child_job_department',
        'child_nationality',
        'child_pob',
        'child_subsidy'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    public function getChildDobAttribute($key)
    {
        return $this->attributes['child_dob'] = Carbon::parse($this->attributes['child_dob'])->format('Y-M-d');
    }
}
