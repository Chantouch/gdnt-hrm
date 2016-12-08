<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class AwardPunishment extends Model
{
    protected $table = 'award_punishments';
    protected $dates = ['ap_published_date'];
    protected $guarded = ['_method'];
    protected $fillable = [
        'ap_custom1',
        'ap_custom2',
        'ap_department',
        'ap_emp_id',
        'ap_doc_number',
        'ap_others',
        'ap_description',
        'ap_published_date',
        'ap_punish_type',
        'ap_type',
    ];

    public static function rules()
    {
        return [
            'ap_doc_number' => 'numeric'
        ];
    }

    public static function messages()
    {
        return [
            'ap_doc_number.numeric' => 'Please use only number for doc number'
        ];
    }

    public function getAPPublishedDateAttribute()
    {
        return $this->attributes['ap_published_date'] = Carbon::parse($this->attributes['ap_published_date'])->format('Y-m-d');
    }

    public static function types()
    {
        return [
            'A' => 'A', 'B' => 'B', 'C' => 'C', 'E' => 'E', 'F' => 'F', 'G' => 'G'
        ];
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}
