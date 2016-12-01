<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Frame extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'description', 'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'description' => 'string',
        'status' => 'boolean',
    ];

    public static function rules()
    {
        return [
            'name' => 'required',
        ];
    }

    public static function messages()
    {
        return [
            'name.required' => 'Frame name can not leave it blank',
        ];
    }

    public function firstStateJob()
    {
        return $this->belongsTo(FirstStateJob::class);
    }
}
