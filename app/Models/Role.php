<?php

namespace App\Models;

use Zizaco\Entrust\EntrustRole;
use Request;

class Role extends EntrustRole
{

    protected $fillable = [
        'name', 'display_name', 'description'
    ];

    /**
     * @return array
     */
    public static function validate()
    {
        return [
            'name' => 'required|unique:roles,name',
            'display_name' => 'required',
            'description' => 'required',
            'permission' => 'required',
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
                    'name' => 'required|unique:roles,name',
                    'display_name' => 'required',
                    'description' => 'required',
                    'permission' => 'required',
                ];
            }
            case 'PUT':
            case 'PATCH': {
                return [

                    'name' => 'required|unique:roles,name,' . $id,
                    'display_name' => 'required',
                    'description' => 'required',
                    'permission' => 'required',

                ];
            }
            default:
                break;
        }
    }

    public static function message()
    {
        return [
            'name.required' => 'Role name is required'
        ];
    }
}
