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
                'name' => 'staff',
                'display_name' => 'Staff',
                'description' => 'User is allowed to see their profiles',
            ], [
                'name' => 'admin',
                'display_name' => 'Administrator',
                'description' => 'User is allowed to manage all module in system',
            ], [
                'name' => 'super-admin',
                'display_name' => 'Super Administrator',
                'description' => 'User is allowed to manage all module in system with advanced features',
            ]
        ];

        foreach ($role as $key => $value) {
            Role::create($value);
        }
    }
}
