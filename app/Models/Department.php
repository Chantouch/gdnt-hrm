<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'name', 'description', 'status', 'ministry_id'
    ];

    public static function rules()
    {
        return [
            'name' => 'required',
            'ministry_id' => 'required'
        ];
    }

    public static function messages()
    {
        return [
            'name.required' => 'Department name can not leave it blank',
            'ministry_id.required' => 'Ministry can not leave it blank',
        ];
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ministry()
    {
        return $this->belongsTo(Ministry::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function departmentUnits()
    {
        return $this->hasMany(DepartmentUnit::class);
    }
}
