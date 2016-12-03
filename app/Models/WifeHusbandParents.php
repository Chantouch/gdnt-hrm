<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class WifeHusbandParents extends Model
{
    protected $table = 'wife_husband_parents';
    protected $fillable = [
        'whp_custom1',
        'whp_custom2',
        'whp_address',
        'whp_emp_id',
        'whp_department',
        'whp_others',
        'whp_dob',
        'whp_ethnic',
        'whp_fn_en',
        'whp_full_name',
        'whp_job',
        'whp_nationality',
        'whp_place_of_birth',
        'whp_status',
        'whp_subsidy',
        'whp_type',
    ];

    public function getWHPDOBAttribute()
    {
        return $this->attributes['whp_dob'] = Carbon::parse($this->attributes['whp_dob'])->format('Y-m-d');
    }
}
