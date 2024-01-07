<?php
namespace App\Http\Controllers;
use App\Models\Courses;
use App\Repositories\CoursesRepository;
/**
 * Courses Controller defines the logic for displaying courses with enrolled students.
 */
/**
 * The index() method fetches courses results from the database, and index them at the
 * main page. 
 * This method returns the view of a dashboard that the courses are displayed.
 */
/**
 * The show() method provides results based in the a relationship between courses and enrolled students.
 * More specifically, a collection of enrolled students is provided, that is related to the courses.
 */

 /**
  * Implementing courses repository binding at the controller level.
  * Adding a constructor at the class and passing it, coursesRepository, I try to inject 
  * controller preffered methods into the constructor and reository.
  */


class CoursesController extends Controller
{
    private $coursesRepository;

    public function __construct(CoursesRepository $coursesRepository ){
        $this -> coursesRepository = $coursesRepository;
    }

    public function index()
    {
        $courses = $this -> coursesRepository->get();
        return $courses;
     
    }

    public function show(Courses $course)
    {
        $courseData = $this->coursesRepository->show($course);
        return $courseData;
    }
}
