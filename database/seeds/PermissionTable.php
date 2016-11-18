<?php

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $permission = [
            [
                'name' => 'role-list',
                'display_name' => 'Display Role Listing',
                'description' => 'See only Listing Of Role'
            ],
            [
                'name' => 'role-create',
                'display_name' => 'Create Role',
                'description' => 'Create New Role'
            ],
            [
                'name' => 'role-edit',
                'display_name' => 'Edit Role',
                'description' => 'Edit Role'
            ],
            [
                'name' => 'role-delete',
                'display_name' => 'Delete Role',
                'description' => 'Delete Role'
            ],
            [
                'name' => 'staff-list',
                'display_name' => 'Display staff Listing',
                'description' => 'See only Listing Of Staff'
            ],
            [
                'name' => 'staff-create',
                'display_name' => 'Create Staff',
                'description' => 'Create New Staff'
            ],
            [
                'name' => 'staff-edit',
                'display_name' => 'Edit Staff',
                'description' => 'Edit Staff'
            ],
            [
                'name' => 'staff-delete',
                'display_name' => 'Delete Staff',
                'description' => 'Delete Staff'
            ]
        ];

        foreach ($permission as $key => $value) {
            Permission::create($value);
        }

//        Permission::create([
//            'name' => 'create-staff',
//            'display_name' => 'Create Staff',
//            'description' => 'create new staff',
//        ]);
//        Permission::create([
//            'name' => 'edit-staff',
//            'display_name' => 'Edit Staff',
//            'description' => 'edit existing staff',
//        ]);
    }
}
