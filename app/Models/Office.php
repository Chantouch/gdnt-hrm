<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Office extends Model
{
    use SoftDeletes;
    public $fillable = [
        'name',
        'description',
        'status',
        'department_unit_id'
    ];

    public static function rules()
    {
        return [
            'name' => 'required',
            'department_unit_id' => 'required',
        ];
    }

    public static function messages()
    {
        return [
            'name.required' => 'Field name can not be blank',
            'department_unit_id.required' => 'Please pick a department unit'
        ];
    }

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'description' => 'string',
        'status' => 'boolean',
        'department_unit_id' => 'integer'
    ];


    public function departmentUnit()
    {
        return $this->belongsTo(DepartmentUnit::class);
    }
}
