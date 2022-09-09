<?php

namespace Database\Seeders;

use App\Enums\RoleEnum;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Roy Shay',
            'email' => 'roy@tooshay.io',
            'password' => '$2y$10$ZCWGKKQDFfANbJxIKNlvI.Z39mDJrKr75e2MsxKqTMwNlC/YtrkR.',
        ])->assignRole(RoleEnum::superAdmin()->value);

        User::create([
            'name' => 'Kerrie Mckinnon',
            'email' => 'kerrie@studio-supernatural.co.uk',
            'password' => '$2y$10$x3iW84rHGFRwWfCcV10R8OWnxX24EO0GtCgAYog9syrKuWxKsGine', // supernatural
        ])->assignRole(RoleEnum::staff()->value);

        User::create([
            'name' => 'Gaby Shay',
            'email' => 'gabrielle@studio-supernatural.co.uk',
            'password' => '$2y$10$x3iW84rHGFRwWfCcV10R8OWnxX24EO0GtCgAYog9syrKuWxKsGine', // supernatural
        ])->assignRole(RoleEnum::staff()->value);
    }
}
