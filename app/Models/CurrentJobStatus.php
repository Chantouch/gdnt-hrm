<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model as Model;

class CurrentJobStatus extends Model
{

    protected $table = 'current_job_status';

    protected $dates = [
        'cjs_last_date_got_promoted',
        'cjs_last_date_promoted',
    ];

    protected $fillable = [
        'cjs_custom1',
        'cjs_custom2',
        'cjs_department_id',
        'cjs_department_unit_id',
        'cjs_emp_id',
        'cjs_frame_id',
        'cjs_last_date_got_promoted',
        'cjs_last_date_promoted',
        'cjs_occupation_id',
        'cjs_office_id',
        'cjs_others',
    ];

    public function getCJSLastDateGotPromotedAttribute()
    {
        return $this->attributes['cjs_last_date_got_promoted'] = Carbon::parse($this->attributes['cjs_last_date_got_promoted'])->format('Y-m-d');
    }

    public function getCJSLastDatePromotedAttribute()
    {
        return $this->attributes['cjs_last_date_promoted'] = Carbon::parse($this->attributes['cjs_last_date_promoted'])->format('Y-m-d');
    }
}
