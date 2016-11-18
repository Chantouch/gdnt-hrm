<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function () {
    Route::get('roles', ['as' => 'admin.roles.index', 'uses' => 'Admin\RoleController@index', 'middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);
//    Route::get('/manage', ['middleware' => ['permission:manage-admins'], 'uses' => 'AdminController@manageAdmins']);
});

Route::group(['middleware' => ['auth']], function () {

    Route::group(array('prefix' => 'admin'), function () {
        //USERS
        Route::get('users', ['as' => 'admin.users.index', 'uses' => 'Admin\UserController@index']);
        Route::get('users/create', ['as' => 'admin.users.create', 'uses' => 'Admin\UserController@create']);
        Route::post('users/create', ['as' => 'admin.users.store', 'uses' => 'Admin\UserController@store']);
        Route::get('users/{id}/show', ['as' => 'admin.users.show', 'uses' => 'Admin\UserController@show']);
        Route::get('users/{id}/edit', ['as' => 'admin.users.edit', 'uses' => 'Admin\UserController@edit']);
        Route::patch('users/update/{id}', ['as' => 'admin.users.update', 'uses' => 'Admin\UserController@update']);
        Route::delete('users/delete/{id}', ['as' => 'admin.users.destroy', 'uses' => 'Admin\UserController@update']);
        //ROLES
//        Route::get('roles', ['as' => 'admin.roles.index', 'uses' => 'Admin\RoleController@index', 'middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);
        Route::get('roles/create', ['as' => 'admin.roles.create', 'uses' => 'Admin\RoleController@create', 'middleware' => ['permission:role-create']]);
        Route::post('roles/create', ['as' => 'admin.roles.store', 'uses' => 'Admin\RoleController@store', 'middleware' => ['permission:role-create']]);
        Route::get('roles/{id}', ['as' => 'admin.roles.show', 'uses' => 'Admin\RoleController@show']);
        Route::get('roles/{id}/edit', ['as' => 'admin.roles.edit', 'uses' => 'Admin\RoleController@edit', 'middleware' => ['permission:role-edit']]);
        Route::patch('roles/{id}', ['as' => 'admin.roles.update', 'uses' => 'Admin\RoleController@update', 'middleware' => ['permission:role-edit']]);
        Route::delete('roles/{id}', ['as' => 'admin.roles.destroy', 'uses' => 'Admin\RoleController@destroy', 'middleware' => ['permission:role-delete']]);
    });
});