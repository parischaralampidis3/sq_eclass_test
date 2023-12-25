<?php
namespace App\Repositories;
use App\Models\Courses;

class CoursesRepository
{

    public function get()
    {
        $courses = Courses::latest()->get();
        return view('courses', ['courses' => $courses]);
    }

    public function show(Courses $course)
    {
        $students = $course->students()->latest()->get();
        return view('single_course', [
            'course' => $course,
            'students' => $students
        ]);
    }

}