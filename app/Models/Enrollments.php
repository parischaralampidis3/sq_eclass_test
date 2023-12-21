<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Completions;

class Enrollments extends Model
{
    use HasFactory;
       public function completion(){
        return $this->hasOne(Completions::class);
    }
}
