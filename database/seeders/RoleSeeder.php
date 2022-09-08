<?php

namespace Database\Seeders;

use App\Enums\PermissionEnum;
use App\Enums\RoleEnum;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
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
        $roles = RoleEnum::toValues();

        foreach ($roles as $role) {
            Role::updateOrCreate([
                'name' => $role,
            ]);
        }

        foreach (PermissionEnum::toValues() as $permission) {
            Permission::updateOrCreate([
                'name' => $permission,
            ]);
        }
    }
}
