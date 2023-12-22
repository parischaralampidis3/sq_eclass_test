<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation;
use App\Models\Courses;
use App\Models\Students;
class CoursesController extends Controller
{
    public function index(){
        $courses = Courses::latest()->get();
        
        return view('courses',['courses' => $courses]);
    }

    public function show(Courses $course){
       $students = $course->students()->latest()->get();
        return view('single_course', [
            'course' => $course,
            'students' => $students
        ]);
    }
}
