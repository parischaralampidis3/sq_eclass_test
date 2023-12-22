<?php

namespace App\Http\Controllers;
use App\Models\Courses;

/**
 * Courses Controller defines the logic for displaying courses with enrolled students.
 */
/**
 * The index() method fetches courses results from the database, and index them at the
 * main page. 
 * This method returns the view of a dashboard that the courses are displayed.
 */
/**
 * THe show() method provides results based in the a relationship between courses and enrolled students.
 * More specifically, a collection of enrolled students is provided, that is related to the courses.
 */
class CoursesController extends Controller
{
    public function index()
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
