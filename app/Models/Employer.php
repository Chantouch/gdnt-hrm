<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employer extends Model
{

    use SoftDeletes;
    protected $table = 'users';

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
            's' => 'single', 'm' => 'married', 'd' => 'divorcee', 'w' => 'widow'
        ];
    }
}
