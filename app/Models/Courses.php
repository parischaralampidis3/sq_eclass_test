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
        'title',
       
        'excerpt',
        'body'
    ];
    
    public function students(){
       return $this->belongsTo(Students::class);
    }

    public function enrollments(){
       return $this->hasMany(Enrollments::class);
    }

    public function completions(){
        return $this->hasMany(Completions::class);
    }
}
