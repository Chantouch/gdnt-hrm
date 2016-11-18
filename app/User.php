<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Request;

class User extends Authenticatable
{
    use Notifiable;
    use EntrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public static function rule($id)
    {
//        return [
//            'name' => 'required',
//            'email' => 'required|email|unique:users,email',
//            'password' => 'required|same:confirm-password',
//            'roles' => 'required'
//        ];

        switch (Request::method()) {
            case 'GET':
            case 'DELETE': {
                return [];
            }
            case 'POST': {
                return [
                    'name' => 'required',
                    'email' => 'required|email|unique:users,email',
                    'password' => 'required|same:confirm-password',
                    'roles' => 'required'
                ];
            }
            case 'PUT':
            case 'PATCH': {
                return [

                    'name' => 'required',
                    'email' => 'required|email|unique:users,email,' . $id,
                    'password' => 'same:confirm-password',
                    'roles' => 'required'

                ];
            }
            default:
                break;
        }
    }

    public static function messages()
    {
        return [
            'name.required' => 'Please input your name'
        ];
    }
}
