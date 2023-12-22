<?php

namespace App\Models;

use App\Models\Students;
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

    public function students()
    {
        return $this->belongsToMany(Students::class,'course_student');
    }


}
