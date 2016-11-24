<?php

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = [
            [
                'name' => 'system-admin',
                'display_name' => 'System Administrator',
                'description' => 'This role is allowed to use all features in system.',
            ], [
                'name' => 'management',
                'display_name' => 'Management',
                'description' => 'This role is allowed for only to view and and see the dashboard',
            ], [
                'name' => 'admin-officer',
                'display_name' => 'Administrator officer',
                'description' => 'User is allowed to manage all module in system (CRUD)',
            ], [
                'name' => 'officer',
                'display_name' => 'Officer',
                'description' => 'This role is allowed to view their information only',
            ]
        ];

        foreach ($role as $key => $value) {
            Role::create($value);
        }
    }
}
