<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Request;

class Spouse extends Model
{
    protected $table = 'spouses';
    protected $dates = ['sp_dob'];
    protected $fillable = [
        'sp_custom1',
        'sp_custom2',
        'sp_address',
        'sp_emp_id',
        'sp_department',
        'sp_others',
        'sp_dob',
        'sp_ethnic',
        'sp_fn_en',
        'sp_full_name',
        'sp_nationality',
        'sp_pob',
        'sp_job',
        'sp_status',
        'sp_subsidy',
        'sp_hand_phone',
        'sp_work_phone',
        'sp_home_phone',
    ];

    /**
     * @param $id
     * @return array
     */

    public static function rule($id)
    {
        switch (Request::method()) {
            case 'GET':
            case 'DELETE': {
                return [];
            }
            case 'POST': {
                return [

                ];
            }
            case 'PUT':
            case 'PATCH': {
                return [
                    'sp_hand_phone' => 'unique:spouses,sp_hand_phone,' . $id . ',id',
                ];
            }
            default:
                break;
        }
    }

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
    public function getSPDOBAttribute()
    {
        return $this->attributes['sp_dob'] = Carbon::parse($this->attributes['sp_dob'])->format('Y-m-d');
    }


}
