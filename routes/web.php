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

Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin/dashboard', ['as' => 'admin.dashboard', 'uses' => 'HomeController@index']);
    Route::group(['prefix' => 'admin', 'middleware' => ['role:super-admin|system-admin|admin|admin-officer|management|officer']], function () {
        Route::group(array('prefix' => 'system'), function () {
            //Permissions
            Route::get('permissions', ['as' => 'admin.permissions.index', 'uses' => 'Admin\PermissionController@index', 'middleware' => ['permission:list-permission']]);
            Route::get('permissions/{id}/show', ['as' => 'admin.permissions.show', 'uses' => 'Admin\PermissionController@show', 'middleware' => ['permission:show-single-permission']]);
            Route::get('users', ['as' => 'admin.users.index', 'uses' => 'Admin\UserController@index', 'middleware' => ['permission:list-staff']]);
            Route::get('users/{id}/show', ['as' => 'admin.users.show', 'uses' => 'Admin\UserController@show', 'middleware' => ['permission:show-single-staff']]);
            Route::get('users/{id}/profile/show', ['as' => 'admin.users.show.profile', 'uses' => 'Admin\UserController@profile', 'middleware' => ['permission:show-single-staff|show-own-self']]);
            Route::get('users/create', ['as' => 'admin.users.create', 'uses' => 'Admin\UserController@create', 'middleware' => ['permission:create-staff']]);
            Route::post('users/create', ['as' => 'admin.users.store', 'uses' => 'Admin\UserController@store', 'middleware' => ['permission:create-staff']]);
            Route::get('users/{id}/edit', ['as' => 'admin.users.edit', 'uses' => 'Admin\UserController@edit', 'middleware' => ['permission:edit-staff|edit-own-self']]);
            Route::patch('users/update/{id}', ['as' => 'admin.users.update', 'uses' => 'Admin\UserController@update', 'middleware' => ['permission:edit-staff|edit-own-self']]);
            Route::delete('users/delete/{id}', ['as' => 'admin.users.destroy', 'uses' => 'Admin\UserController@update', 'middleware' => ['permission:delete-staff']]);

            //ROLES
            Route::get('roles', ['as' => 'admin.roles.index', 'uses' => 'Admin\RoleController@index', 'middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);
            Route::get('roles/create', ['as' => 'admin.roles.create', 'uses' => 'Admin\RoleController@create', 'middleware' => ['permission:role-create']]);
            Route::post('roles/create', ['as' => 'admin.roles.store', 'uses' => 'Admin\RoleController@store', 'middleware' => ['permission:role-create']]);
            Route::get('roles/{id}/show', ['as' => 'admin.roles.show', 'uses' => 'Admin\RoleController@show']);
            Route::get('roles/{id}/edit', ['as' => 'admin.roles.edit', 'uses' => 'Admin\RoleController@edit', 'middleware' => ['permission:role-edit']]);
            Route::patch('roles/{id}', ['as' => 'admin.roles.update', 'uses' => 'Admin\RoleController@update', 'middleware' => ['permission:role-edit']]);
            Route::delete('roles/{id}', ['as' => 'admin.roles.destroy', 'uses' => 'Admin\RoleController@destroy', 'middleware' => ['permission:role-delete']]);

        });

        //Route Modules
        Route::group(array('prefix' => 'modules'), function () {
            //Ministries
            Route::resource('ministries', 'Admin\MinistryController', ["as" => "admin.modules"]);
            Route::resource('departments', 'Admin\DepartmentController', ["as" => "admin.modules"]);
            Route::resource('department-units', 'Admin\DepartmentUnitController', ["as" => "admin.modules"]);
        });
    });

//    Route::group(array('prefix' => 'admin/'), function () {
//        Route::group(array('prefix' => 'system'), function () {
//            //USERS
//
//        });
//    });

});