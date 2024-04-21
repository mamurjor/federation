<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin
        $admin =  Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
        ]);
        User::create([
            'role_id' => $admin->id,
            'fname'   => 'Admin',
            'lname'   => 'Admin',
            'email'   => 'admin@gmail.com',
            'password' => Hash::make(12345678),
        ]);

        // Client
        $client =  Role::create([
            'name' => 'Client',
            'slug' => 'client',
        ]);
        User::create([
            'role_id' => $client->id,
            'fname'   => 'Client',
            'lname'   => 'Client',
            'email'   => 'client@gmail.com',
            'password' => Hash::make(12345678),
        ]);

        // Client
        $user =  Role::create([
            'name' => 'User',
            'slug' => 'user',
        ]);
        User::create([
            'role_id' => $user->id,
            'fname'   => 'User',
            'lname'   => 'User',
            'email'   => 'user@gmail.com',
            'password' => Hash::make(12345678),
        ]);
    }
}
