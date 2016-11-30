<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Request;

class Employer extends Model
{

    use SoftDeletes;
    protected $table = 'users';
    protected $dates = ['dob', 'id_card_expired', 'passport_expired_date'];
    /**
     * @var array
     */
    public $fillable = [
        'full_name', 'id_notice_emp', 'fn_en', 'email', 'emp_id', 'department_code',
        'gender', 'marital_status', 'nationality', 'ethnic', 'place_of_birth', 'dob',
        'email1', 'email2', 'cover_photo', 'hand_phone', 'work_phone', 'home_phone',
        'id_card', 'id_card_expired', 'passport', 'passport_expired_date', 'others',
        'current_address', 'custom1', 'custom2', 'active'
    ];

    public static function rules()
    {
        return [
            'full_name' => 'required',
            'emp_id' => 'required|max:10',
            'email' => 'required',
            'id_card' => 'required',
            'id_card_expired' => 'required',
            'current_address' => 'required',
            'place_of_birth' => 'required',
        ];
    }

    public static function rule($id)
    {

        switch (Request::method()) {
            case 'GET':
            case 'DELETE': {
                return [];
            }
            case 'POST': {
                return [
                    'name' => 'required',
                    'email' => 'required|email|unique:users,email,' . $id . ',id',
                    'password' => 'required|same:confirm-password',
                    'roles' => 'required'
                ];
            }
            case 'PUT':
            case 'PATCH': {
                return [
                    'email' => 'required|email|unique:users,email,' . $id . ',id',
                ];
            }
            default:
                break;
        }
    }

    public static function messages()
    {
        return [
            'full_name.required' => 'Please fill your full name'
        ];
    }

    public function setNameAttribute($value)
    {
        return $this->attributes['name'] = "Default";
    }

    public static function marital_status()
    {
        return [
            's' => 'Single', 'm' => 'Married', 'd' => 'Divorcee', 'w' => 'Widow'
        ];
    }

//    public function getDobAttribute()
//    {
//        return Carbon::parse($this->attributes['dob'])->format('Y-M-d');
//    }

    public function getIdCardExpiredAttribute()
    {
        return Carbon::parse($this->attributes['id_card_expired'])->format('Y-M-d');
    }

    public function getPassportExpiredDateAttribute()
    {
        return Carbon::parse($this->attributes['passport_expired_date'])->format('Y-M-d');
    }

    public function setDepartmentCodeAttribute($value)
    {
        $this->attributes['department_code'] = ($value == '') ? '' : $value;
    }

    public function setIdNoticeEmpAttribute($value)
    {
        $this->attributes['id_notice_emp'] = ($value == '') ? '' : $value;
    }


    public function firstStateJob()
    {
        return $this->hasOne(FirstStateJob::class, 'emp_id');
    }
}
