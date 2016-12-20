<?php

namespace App\Models;

use Carbon\Carbon as Carbon;
use Illuminate\Database\Eloquent\Model as Model;

class AddonCurrentPosition extends Model
{
    protected $table = 'add_on_current_positions';
    protected $fillable = [
        'acp_custom1',
        'acp_custom2',
        'acp_department',
        'acp_emp_id',
        'acp_equal_position',
        'acp_others',
        'acp_position',
        'acp_start_date',
    ];
    protected $dates = ['acp_start_date'];
    protected $guarded = ['_method'];

//    public function setACPStartDateAttribute()
//    {
//        return $this->attributes['acp_start_date'] = Carbon::parse($this->attributes['acp_start_date'])->format('Y-m-d');
//    }

    public function getACPStartDateAttribute()
    {
        return $this->attributes['acp_start_date'] = Carbon::parse($this->attributes['acp_start_date'])->format('Y-m-d');
    }

    public static function rules()
    {
        return [

        ];
    }

    public static function messages()
    {
        return [

        ];
    }
}
