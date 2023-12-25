<?php
namespace App\Repositories;
use App\Models\Courses;

class CoursesRepository
{
public function get(){

        $courses = Courses::latest()->get();
        return view('courses', ['courses' => $courses]);
}

}