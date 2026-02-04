<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;  // correct
use Illuminate\Database\Seeder;

class StudentCourseSeeder extends Seeder
{
    public function run(): void
    {
        $studentCourses = [
            [
                'student_id' => 1,
                'course_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_id' => 2,
                'course_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_id' => 3,
                'course_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_id' => 1,
                'course_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        DB::table('student_courses')->insert($studentCourses);
    }
}
