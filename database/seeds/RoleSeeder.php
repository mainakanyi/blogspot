<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'Admin',
            'Supplier',
            'User',
            'Customer',
            'Guest'
        ];


        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }
    }
}
