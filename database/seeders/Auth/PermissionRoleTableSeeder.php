<?php

namespace Database\Seeders\Auth;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

/**
 * Class PermissionRoleTableSeeder.
 */
class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Run the database seed.
     *
     * @return void
     */
    public function run()
    {
        $this->CreateDefaultPermissions();

        /**
         * Create Roles and Assign Permissions to Roles.
         */
        $super_admin = Role::firstOrCreate(['id' => '1'], ['name' => 'super admin']);

        $admin = Role::firstOrCreate(['id' => '2'], ['name' => 'administrator']);
        $admin->givePermissionTo(['view_backend', 'edit_settings']);

        $manager = Role::firstOrCreate(['id' => '3'], ['name' => 'manager']);
        $manager->givePermissionTo('view_backend');

        $executive = Role::firstOrCreate(['id' => '4'], ['name' => 'executive']);
        $executive->givePermissionTo('view_backend');

        $user = Role::firstOrCreate(['id' => '5'], ['name' => 'user']);
    }

    /**
     * Create Default Permissions.
     */
    public function CreateDefaultPermissions()
    {
        // Default permissions
        $permissions = Permission::defaultPermissions();

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission], ['guard_name' => 'web']);
        }

        // Artisan Commands for Permissions
        $permissionModules = ['posts', 'categories', 'tags', 'comments'];

        foreach ($permissionModules as $module) {
            Artisan::call('auth:permissions', [
                'name' => $module,
            ]);
            echo "\n _{$module}_ Permissions Created.";
        }

        echo "\n\n";
    }
}
