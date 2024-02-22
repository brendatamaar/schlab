<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Classes;
use App\Models\Students;
use App\Models\Teachers;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teacherProfile = Teachers::create(['joined' => '2023-12-31']);

        $teacher = Users::create([
            'name' => 'Teacher',
            // 'username' => 'teacher',
            'email' => 'teacher@gmail.com',
            'password' => Hash::make('teacher'),
            'profile_id' => $teacherProfile->id,
            'profile_type' => 'App\Models\Teachers'
        ]);
        $teacher->assignRole('teacher');


        $parent = Users::create([
            'name' => 'Parent',
            // 'username' => 'parent',
            'email' => 'parent@gmail.com',
            'password' => Hash::make('parent')
        ]);
        $parent->assignRole('parent');

        $class = Classes::create([
            'name' => 'Class 8A',
            'level' => '8',
            'sublevel' => 'A',
            'guardian_id' => $teacher->id,
            'description' => '',
            'room_number' => 'Room 1 First Floor North Building',
            'academic_year' => '2023/2024',
            'capacity' => '50',
            'current_enrollment' => '35',
            'status' => 'active',
        ]);

        $studentProfile = Students::create(['class_id' => $class->id, 'parent_id' => $parent->id]);

        $student = Users::create([
            'name' => 'Student',
            // 'username' => 'student',
            'email' => 'student@gmail.com',
            'password' => Hash::make('student'),
            'profile_id' => $studentProfile->id,
            'profile_type' => 'App\Models\Students'
        ]);
        $student->assignRole('student');
    }
}
