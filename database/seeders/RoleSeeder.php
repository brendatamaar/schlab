<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'Super Admin']);
        $headmaster = Role::create(['name' => 'Head Master']);
        $admin = Role::create(['name' => 'Admin']);
        $teacher = Role::create(['name' => 'Teacher']);
        $student = Role::create(['name' => 'Student']);
        $parent = Role::create(['name' => 'Parent']);

        $headmaster->givePermissionTo([
            'create-user',
            'edit-user',
            'delete-user',
            'create-subject',
            'view-subject',
            'edit-subject',
            'delete-subject'
        ]);

        $admin->givePermissionTo([
            'create-user',
            'edit-user',
            'delete-user',
            'create-subject',
            'view-subject',
            'edit-subject',
            'delete-subject'
        ]);

        $teacher->givePermissionTo([
            'view-subject',
        ]);

        $student->givePermissionTo([
            'view-subject',
        ]);

        $parent->givePermissionTo([
            'view-subject',
        ]);
    }
}
