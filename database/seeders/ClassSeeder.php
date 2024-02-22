<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Classes;
use App\Models\Students;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $class = Classes::create([
            'name' => 'Class 8A',
            'class' => '8',
            'subclass' => 'A',
            'status' => '1'
        ]);

        $teacher = Users::create([
            'name' => 'Teacher',
            // 'username' => 'teacher',
            'email' => 'teacher@gmail.com',
            'password' => Hash::make('teacher')
        ]);
        $teacher->assignRole('Teacher');


        $parent = Users::create([
            'name' => 'Parent',
            // 'username' => 'parent',
            'email' => 'parent@gmail.com',
            'password' => Hash::make('parent')
        ]);
        $parent->assignRole('Parent');

        $studentProfile = Students::create(['class_id' => $class->id, 'parent_id' => $parent->id]);

        $student = Users::create([
            'name' => 'Student',
            // 'username' => 'student',
            'email' => 'student@gmail.com',
            'password' => Hash::make('student'),
            'profile_id' => $studentProfile->id,
            'profile_type' => 'App\Models\Students'
        ]);
        $student->assignRole('Student');
    }
}
