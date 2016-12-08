<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    protected $table = 'awards';
    protected $dates = ['aw_published_date'];
    protected $guarded = ['_method'];
    protected $fillable = [
        'aw_custom1',
        'aw_custom2',
        'aw_department',
        'aw_emp_id',
        'aw_doc_number',
        'aw_others',
        'aw_description',
        'aw_published_date',
        'aw_type',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    public function getAwPublishedDateAttribute()
    {
        return $this->attributes['aw_published_date'] = Carbon::parse($this->attributes['aw_published_date'])->format('Y-m-d');
    }
}
