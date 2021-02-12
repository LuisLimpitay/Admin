<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;

class Place extends Model
{
    use HasFactory;

    // RELACION N a N
    public function courses(){
        return $this->hasMany(Course::class);
    }
}
