<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoursesStudents extends Model
{
    use HasFactory;
    protected $table = 'courses_students';
    protected $fillable = [
        'course_id',
        'student_id'
    ];
}
