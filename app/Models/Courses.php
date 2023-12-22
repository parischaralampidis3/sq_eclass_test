<?php

namespace App\Models;
use App\Models\Students;
use App\Models\Enrollments;
use App\Models\Completions;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'title',
        'excerpt',
        'body'
    ];
    
    public function students(){
         return $this->belongsToMany(Students::class, 'courses_students', 'course_id', 'student_id');
    }


}
