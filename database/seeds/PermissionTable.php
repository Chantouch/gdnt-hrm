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
                'name' => 'list-staff',
                'display_name' => 'Display staff Listing',
                'description' => 'See only Listing Of Staff'
            ],
            [
                'name' => 'create-staff',
                'display_name' => 'Create Staff',
                'description' => 'Create New Staff'
            ],
            [
                'name' => 'edit-staff',
                'display_name' => 'Edit Staff',
                'description' => 'Edit Staff'
            ],
            [
                'name' => 'delete-staff',
                'display_name' => 'Delete Staff',
                'description' => 'Delete Staff'
            ],
            [
                'name' => 'edit-own-self',
                'display_name' => 'Edit Own self',
                'description' => 'This permission allow use to edit their own information'
            ],
            [
                'name' => 'show-single-staff',
                'display_name' => 'Show Single Staff',
                'description' => 'Allowed user to view a single staff for more information'
            ],
            [
                'name' => 'show-single-role',
                'display_name' => 'Show Single Role',
                'description' => 'Allowed user to view a single role, only allowed for Admin role'
            ],
            [
                'name' => 'list-permission',
                'display_name' => 'View all permission available',
                'description' => 'Allowed user to view all permission, only allowed for Admin role'
            ],
            [
                'name' => 'show-single-permission',
                'display_name' => 'View specific permission',
                'description' => 'Allowed user to view a specific permission, only allowed for Admin role'
            ],
            [
                'name' => 'show-own-self',
                'display_name' => 'View his/her information completely',
                'description' => 'Allowed user to view their information completely'
            ]
        ];

        foreach ($permission as $key => $value) {
            Permission::create($value);
        }

    }
}
