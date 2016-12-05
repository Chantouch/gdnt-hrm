<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Validator;

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

    public static function rules()
    {
        return [
            'whp_full_name' => 'required'
        ];
    }

    public function getWHPDOBAttribute()
    {
        return $this->attributes['whp_dob'] = Carbon::parse($this->attributes['whp_dob'])->format('Y-m-d');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    public function updateMother(Request $request)
    {
        $validator = Validator::make($date = $request->all(), WifeHusbandParents::rules());
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->with('error', 'Please fill all required fields');
        }
    }
}
