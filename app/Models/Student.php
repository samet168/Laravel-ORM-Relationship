<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // បញ្ជាក់ table name ផ្ទាល់
    protected $table = 'student_tb';

    // ប្រសិនមាន primary key ឈ្មោះផ្សេងពី 'id'
    // protected $primaryKey = 'id';

    // Example relation
    public function courses()
    {
        return $this->belongsToMany(Course::class, 'student_courses', 'student_id', 'course_id');
    }
}
