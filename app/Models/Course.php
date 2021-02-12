<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Teacher;
use App\Models\Place;


class Course extends Model
{
    use HasFactory;

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

    // RELACION UNO
    public function places(){
        return $this->belongsTo(Place::class);
    }

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
    
}
