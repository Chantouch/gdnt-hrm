<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model as Model;

class HistoryPrivateJob extends Model
{
    protected $table = 'history_private_jobs';
    protected $casts = [];
    protected $dates = ['hpj_start_date', 'hpj_end_date'];
    protected $guarded = ['_method'];
    protected $fillable = [
        'hpj_custom1',
        'hpj_custom2',
        'hpj_department',
        'hpj_emp_id',
        'hpj_others',
        'hpj_ministry_institute',
        'hpj_end_date',
        'hpj_start_date',
        'hpj_occupation',
    ];


//    public function setPHJStartDateAttribute()
//    {
//        Carbon::parse($this->attributes['hpj_start_date'])->format('Y-m-d');
//    }

    public function getHPJStartDateAttribute()
    {
        return $this->attributes['hpj_start_date'] = Carbon::parse($this->attributes['hpj_start_date'])->format('Y-m-d');
    }

//    public function setPHJEndDateAttribute()
//    {
//        Carbon::parse($this->attributes['hpj_end_date'])->format('Y-m-d');
//    }

    public function getHPJEndDateAttribute()
    {
        return $this->attributes['hpj_end_date'] = Carbon::parse($this->attributes['hpj_end_date'])->format('Y-m-d');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}
