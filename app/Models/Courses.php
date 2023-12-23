<?php

namespace App\Models;

use App\Models\Students;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

/**
 * This array contains properties that through mass assignment, they stay protected.
 * That means, when an update of a requestt at the database,this valuew won't be updated.
 */
    protected $fillable = [
        'student_id',
        'title',
        'excerpt',
        'body',
        'difficulty'
    ];
/**
 *Courses models is defined with many to many relationships with students.
 */
    public function students()
    {
        return $this->belongsToMany(Students::class, 'course_student');
    }
}
