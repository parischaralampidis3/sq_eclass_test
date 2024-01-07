<?php
namespace App\Repositories;
use App\Models\Courses;

class CoursesRepository
{
    /**
    * Repository layer contains controller methods, such as get for fetching courses and return the courses view.
    */
    public function get()
    {
        $courses = Courses::latest()->get();
        return view('courses', ['courses' => $courses]);
    }

    /**
     * Show method returns a single view, more specific an eloquent relationship between courses and
     * students is set in a variable, and a single view is returned, accompanied by an assosiative array of students and courses.
     * 
     */
    public function show(Courses $course)
    {
        $students = $course->students()->latest()->get();
        return view('single_course', [
            'course' => $course,
            'students' => $students
        ]);
    }

}