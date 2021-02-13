<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;

class Content extends Model
{

    protected $table = 'contents';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name_content',
        'description',
        'price',
    ];

    use HasFactory;

    //Relacion uno a uno
    public function courses()
    {
        return $this->hasOne(Course::class);
    }

}
