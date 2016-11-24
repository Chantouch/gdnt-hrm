<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DepartmentUnit extends Model
{
    protected $fillable = [
        'name', 'description', 'status', 'department_id'
    ];

    public static function rules()
    {
        return [
            'name' => 'required',
            'department_id' => 'required'
        ];
    }

    public static function messages()
    {
        return [
            'name.required' => 'Department unit name can not be blank',
            'department_id.required' => 'Department can not leave to blank'
        ];
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function offices()
    {
        return $this->belongsTo(Office::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
