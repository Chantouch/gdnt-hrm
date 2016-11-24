<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ministry extends Model
{

    use SoftDeletes;
    /**
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'status',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'description' => 'string',
        'status' => 'boolean'
    ];

    /**
     * @return array
     */
    public static function rules()
    {
        return [
            'name' => 'required'
        ];
    }

    /**
     * @return array
     */
    public static function message()
    {
        return [
            'name.required' => 'The ministry name can not be blank.'
        ];
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function departments()
    {
        return $this->hasMany(Department::class);
    }
}
