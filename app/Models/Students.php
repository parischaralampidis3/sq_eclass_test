<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Enrollments;
use App\Models\Courses;
use App\Models\Completions;

class Students extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'completion_id',
        'enrollment_id',
    ];


    public function courses()
    {
        return $this->belongsToMany(Courses::class,'course_student');
    }


    /**
     * At this methods are defined relationships between Students and Enrollments where a student has many instances of enrollments and completions.
     */
    public function enrollment()
    {
        return $this->hasMany(Enrollments::class);
    }

    public function completions()
    {
        return $this->hasMany(Completions::class);
    }


}
