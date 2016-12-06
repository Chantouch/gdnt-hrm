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

    /**
     * @return array
     */
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

    /**
     * @return array
     */
    public static function messages()
    {
        return [
            'full_name.required' => 'Please fill your full name'
        ];
    }

    /**
     * @param $value
     * @return string
     */
    public function setNameAttribute($value)
    {
        return $this->attributes['name'] = "Default";
    }

    /**
     * @return array
     */
    public static function marital_status()
    {
        return [
            's' => 'នៅលីវ',
            'm' => 'រៀវការ',
            'd' => 'លែងលះ',
            'w' => 'នៅព្រៅ'
        ];
    }

    public static function status()
    {
        return [
            'l' => 'រស់',
            'd' => 'ស្លាប់',
        ];
    }

    public static function gender()
    {
        return [
            'MALE' => 'ប្រុស',
            'FEMALE' => 'ស្រី',
        ];
    }

    public static function subsidy()
    {
        return [
            '1' => 'មាន',
            '0' => 'មិនមាន',
        ];
    }

    /**
     * @return string
     */
    public function getDobAttribute()
    {
        return Carbon::parse($this->attributes['dob'])->format('Y-M-d');
    }

    /**
     * @return string
     */
    public function getIdCardExpiredAttribute()
    {
        return Carbon::parse($this->attributes['id_card_expired'])->format('Y-M-d');
    }

    /**
     * @return string
     */
    public function getPassportExpiredDateAttribute()
    {
        return Carbon::parse($this->attributes['passport_expired_date'])->format('Y-M-d');
    }

    public function setDepartmentCodeAttribute($value)
    {
        $this->attributes['department_code'] = ($value == 'GDNT') ? '' : $value;
    }

    /**
     * @param $value
     */
    public function setIdNoticeEmpAttribute($value)
    {
        $this->attributes['id_notice_emp'] = ($value == '') ? '' : $value;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function firstStateJob()
    {
        return $this->hasOne(FirstStateJob::class, 'fsj_emp_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function currentJob()
    {
        return $this->hasOne(CurrentJobStatus::class, 'cjs_emp_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function addOnCurrentPosition()
    {
        return $this->hasOne(AddonCurrentPosition::class, 'acp_emp_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function outFrameNoSalary()
    {
        return $this->hasOne(OutFrameNoSalary::class, 'fn_emp_id');
    }

    public function noSalaryStatus()
    {
        return $this->hasOne(NoSalaryStatus::class, 'nss_emp_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function jobHistoryPrivatePublic()
    {
        return $this->hasOne(JobsHistory::class, 'phj_emp_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function awardPunishment()
    {
        return $this->hasOne(AwardPunishment::class, 'ap_emp_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function educationLevel()
    {
        return $this->hasOne(EducationLevel::class, 'el_emp_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function languageLevel()
    {
        return $this->hasOne(LanguageLevel::class, 'll_emp_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function wifeHusbandParent()
    {
        return $this->hasOne(WifeHusbandParents::class, 'whp_emp_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function father()
    {
        return $this->hasOne(Father::class, 'f_emp_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function mother()
    {
        return $this->hasOne(Mother::class, 'm_emp_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function spouse()
    {
        return $this->hasOne(Spouse::class, 'sp_emp_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function siblings()
    {
        return $this->hasOne(Sibling::class, 'sib_emp_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function children()
    {
        return $this->hasOne(Children::class, 'child_emp_id');
    }
}
