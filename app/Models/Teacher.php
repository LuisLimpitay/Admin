<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpKernel\Profiler\Profile;

use App\Models\Course;

class Teacher extends Model
{
    use HasFactory;

    // Relacion uno a Muchos
    public function courses(){
        return $this->hasMany(Course::class);
    }

}
