<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Vinkla\Hashids\Facades\Hashids;

class Ministry extends Model
{

    use SoftDeletes;

    protected $appends = ['hashid'];
    /**
     * @var array
     */
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

    public function getHashidAttribute()
    {
        return Hashids::encode($this->attributes['id']);
    }

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
