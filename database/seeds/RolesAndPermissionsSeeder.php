<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        // create permissions
        Permission::create(['name' => 'create firm']);
        Permission::create(['name' => 'delete firm']);
        Permission::create(['name' => 'activate firm']);
        Permission::create(['name' => 'add customer']);
        Permission::create(['name' => 'delete customer']);
        Permission::create(['name' => 'edit customer']);

        // create roles and assign created permissions
        $role = Role::create(['name' => 'super admin']);
        $role->givePermissionTo(Permission::all());

        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo(Permission::all());

        $role = Role::create(['name' => 'firm']);
        $role->givePermissionTo(['add customer','edit customer','delete customer']);

        $role = Role::create(['name' => 'RE account']);
        $role->givePermissionTo(['add customer','edit customer','delete customer']);


    }
}