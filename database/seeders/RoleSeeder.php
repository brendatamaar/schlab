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
        Role::create(['name' => 'superadmin']);
        $headmaster = Role::create(['name' => 'headmaster']);
        $admin = Role::create(['name' => 'admin']);
        $teacher = Role::create(['name' => 'teacher']);
        $student = Role::create(['name' => 'student']);
        $parent = Role::create(['name' => 'parent']);

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
