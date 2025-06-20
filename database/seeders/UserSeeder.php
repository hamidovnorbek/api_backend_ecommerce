<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
           'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'admin@admin.com',
            'phone' => '+9087654321',
            'password' => Hash::make('password'),
        ]);

        $admin->roles()->attach(1);

        User::factory(10)->create()->each(function ($user) {
            $user->roles()->attach(2); // Role ID 2
        });

    }
}
