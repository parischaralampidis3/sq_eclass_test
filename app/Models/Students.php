<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Enrollments;
use App\Models\Courses;
class Students extends Model
{
    use HasFactory;

    protected $fillable=[
        
        'name',
        'email',
        'completion_id',
        'enrollment_id',
    ];

    public function courses(){
        return $this->belongsToMany(Courses::class);
    }
    public function enrollment(){
        return $this->hasMany(Enrollments::class);
    }
}
