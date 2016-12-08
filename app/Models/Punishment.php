<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Punishment extends Model
{
    protected $table = 'punishments';
    protected $dates = ['pun_published_date'];
    protected $guarded = ['_method'];
    protected $fillable = [
        'pun_custom1',
        'pun_custom2',
        'pun_department',
        'pun_emp_id',
        'pun_doc_number',
        'pun_others',
        'pun_description',
        'pun_published_date',
        'pun_punish_type',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    public function getPunPublishedDateAttribute()
    {
        return $this->attributes['pun_published_date'] = Carbon::parse($this->attributes['pun_published_date'])->format('Y-m-d');
    }
}
