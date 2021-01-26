<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Enums\PermissionType;
use App\Enums\UserType;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $permissions = PermissionType::getValues();

        foreach ($permissions as $permission){
            Permission::create(['name' => $permission]);
        }

        // this can be done as separate statements
        $adminRole = Role::create(['name' => UserType::ADMIN]);
        Role::create(['name' => UserType::USER]);

        // assign created permissions to roles
        $adminRole->givePermissionTo(Permission::all());
    }
}
