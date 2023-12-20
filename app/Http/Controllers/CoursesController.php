<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Courses;
class CoursesController extends Controller
{
    public function index(){
        $courses = Courses::latest()->get();
        return view('courses',['courses' => $courses]);
    }
}
