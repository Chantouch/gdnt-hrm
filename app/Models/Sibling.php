<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Sibling extends Model
{

    protected $table = 'siblings';
    protected $dates = [
        'sib_dob'
    ];
    protected $fillable = [
        'sib_address',
        'sib_custom1',
        'sib_custom2',
        'sib_others',
        'sib_dob',
        'sib_emp_id',
        'sib_ethnic',
        'sib_fn_en',
        'sib_full_name',
        'sib_gender',
        'sib_job',
        'sib_job_department',
        'sib_nationality',
        'sib_place_of_birth',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    /**
     * @return string
     */
    public function getSIBDOBAttribute()
    {
        return $this->attributes['sib_dob'] = Carbon::parse($this->attributes['sib_dob'])->format('Y-m-d');
    }


}
