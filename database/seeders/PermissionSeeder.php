<?php

namespace Database\Seeders;

use App\Models\RoleHierarchy;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions

        $permissions = [];
        $permissions['users'] = ['view', 'create', 'update', 'delete'];
        $permissions['roles'] = ['view', 'create', 'update', 'delete'];
        $permissions['menus'] = ['view', 'create', 'update', 'delete'];

        foreach ($permissions as $name => $permission) {
            foreach ($permission as $action) {
                Permission::create(['name' => $name . '.' . $action, 'guard_name' => 'web']);
            }
        }

        // create roles and assign existing permissions

        $hierarchy = 1;

        $SuperAdminRole = Role::create(['name' => 'Super-Admin', 'guard_name' => 'web']);
        RoleHierarchy::create([
            'role_id' => $SuperAdminRole->id,
            'hierarchy' => $hierarchy++,
        ]);

        $AdminRole = Role::create(['name' => 'Admin', 'guard_name' => 'web']);
        RoleHierarchy::create([
            'role_id' => $AdminRole->id,
            'hierarchy' => $hierarchy++,
        ]);
        $AdminRole->givePermissionTo('users.view');
        $AdminRole->givePermissionTo('users.create');
        $AdminRole->givePermissionTo('users.update');
        $AdminRole->givePermissionTo('users.delete');

        $ViewerRole = Role::create(['name' => 'Viewer', 'guard_name' => 'web']);
        RoleHierarchy::create([
            'role_id' => $ViewerRole->id,
            'hierarchy' => $hierarchy++,
        ]);

        $PublicRole = Role::create(['name' => 'Public', 'guard_name' => 'web']);
        RoleHierarchy::create([
            'role_id' => $PublicRole->id,
            'hierarchy' => $hierarchy++,
        ]);
    }
}
