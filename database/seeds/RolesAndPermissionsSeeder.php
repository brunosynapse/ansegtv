<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'edit-user']);
        Permission::create(['name' => 'create-user']);
        Permission::create(['name' => 'delete-user']);


        // this can be done as separate statements
        Role::create(['name' => 'user']);
        $adminRole = Role::create(['name' => 'admin']);


        // assign created permissions to roles
        $adminRole->givePermissionTo(Permission::all());
    }
}
