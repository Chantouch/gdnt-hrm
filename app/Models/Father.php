<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model as Model;

class Father extends Model
{
    protected $table = 'fathers';
    protected $dates = ['f_dob'];
    protected $fillable = [
        'f_custom1',
        'f_custom2',
        'f_address',
        'f_emp_id',
        'f_department',
        'f_others',
        'f_dob',
        'f_ethnic',
        'f_fn_en',
        'f_full_name',
        'f_job',
        'f_nationality',
        'f_pob',
        'f_status',
    ];

    protected $casts = [
        'f_emp_id' => 'integer'
    ];


    /**
     * @return string
     */
    public function getFDOBAttribute()
    {
        return $this->attributes['f_dob'] = Carbon::parse($this->attributes['f_dob'])->format('Y-m-d');
    }

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}
