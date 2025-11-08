<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // --------------------
        // 1. Create Permissions
        // --------------------
        $permissions = [
            'view users',
            'create users',
            'edit users',
            'delete users',

            'view posts',
            'create posts',
            'edit posts',
            'delete posts',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission, 'guard_name' => 'web']);
        }

        // --------------------
        // 2. Create Roles
        // --------------------
        $roles = [
            'superadmin',
            'admin',
            'creator',
            'user',
        ];

        foreach ($roles as $role) {
            Role::firstOrCreate(['name' => $role, 'guard_name' => 'web']);
        }

        // --------------------
        // 3. Assign Permissions to Roles
        // --------------------
        // Superadmin gets all permissions
        Role::where('name', 'superadmin')->first()?->givePermissionTo(Permission::all());

        // Admin gets user & post management except delete users
        Role::where('name', 'admin')->first()?->givePermissionTo([
            'view users',
            'create users',
            'edit users',

            'view posts',
            'create posts',
            'edit posts',
            'delete posts',
        ]);

        // Creator can only manage posts
        Role::where('name', 'creator')->first()?->givePermissionTo([
            'view posts',
            'create posts',
            'edit posts',
        ]);

        // User has no admin permissions
    }
}
