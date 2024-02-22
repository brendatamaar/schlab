<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Users;
use App\Models\Admins;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdmin = Users::create([
            'name' => 'Super Admin',
            // 'username' => 'superadmin',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('superadmin')
        ]);
        $superAdmin->assignRole('Super Admin');

        $headmaster = Users::create([
            'name' => 'Headmaster',
            // 'username' => 'headmaster',
            'email' => 'headmaster@gmail.com',
            'password' => Hash::make('headmaster')
        ]);
        $headmaster->assignRole('Head Master');

        // Creating Admin User

        $adminProfile = Admins::create(['manager' => 'Donald', 'department' => 'Retail']);

        $admin = Users::create([
            'name' => 'Admin',
            // 'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'profile_id' => $adminProfile->id,
            'profile_type' => 'App\Models\Admins'
        ]);
        $admin->assignRole('Admin');
    }
}
