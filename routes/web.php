<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoursesController;


Route::get('/',[CoursesController::class,'index']);
Route::get('courses/{course:slug}',[CoursesController::class,'show']);