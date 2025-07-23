<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Buat role jika belum ada
        Role::firstOrCreate(['name' => 'super_admin']);
        Role::firstOrCreate(['name' => 'user']);

        // Buat user admin
        $admin = User::firstOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('password'),
            ]
        );
        $admin->assignRole('super_admin');

        // Buat user biasa
        $user = User::firstOrCreate(
            ['email' => 'user@admin.com'],
            [
                'name' => 'User Account',
                'password' => Hash::make('password'),
            ]
        );
        $user->assignRole('user');
    }
}
