<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StudentCourse>
 */
class StudentCourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $studentId = Student::pluck('id')->toArray();
        $randomStudentId = collect($studentId)->random();

        $courseId = Course::pluck('id')->toArray();
        $randomCourseId = collect($courseId)->random();
        return [
            //
            'student_id' => $randomStudentId,
            'course_id' => $randomCourseId
        ];
    }
}
