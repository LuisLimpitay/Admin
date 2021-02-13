<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Teacher;
use App\Models\Place;


class Course extends Model
{
    use HasFactory;

    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date',
        'time',
        'stock',
    ];
    
    // a UNO
    public function teachers()
    {
        return $this->belongsTo(Teacher::class);
    }

    // a UNO
    public function contents()
    {
        return $this->belongsTo(Content::class);
    }

    // a UNO
    public function places(){
        return $this->belongsTo(Place::class);
    }

    // A MUCHOS
    public function users(){
        return $this->belongsToMany(User::class);
    }
}
