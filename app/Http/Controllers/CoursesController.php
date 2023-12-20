<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symphony\Component\HttpFoundation;
use App\Models\Courses;
class CoursesController extends Controller
{
    public function index(){
        $courses = Courses::latest()->get();
        return view('courses',['courses' => $courses]);
    }

    public function show(Courses $course){
       
        return view('single_course', ['course' => $course]);
    }
}
