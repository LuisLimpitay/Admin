<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Teacher;
use App\Models\Content;
use App\Models\Place;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'date' => $this->faker->date(),
            'time' => $this->faker->time(),
            'stock' => $this->faker->randomElement(['25','30','20', '35']),
            'content_id' => Content::all()->random()->id,
            'teacher_id' => Teacher::all()->random()->id,
            'place_id' => Place::all()->random()->id

        ];
    } 
}
