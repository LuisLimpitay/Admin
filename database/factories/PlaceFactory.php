<?php

namespace Database\Factories;

use App\Models\Place;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PlaceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Place::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->city(5);
        return [
            'city' => $name,
            'slug_city' => Str::slug($name),
            'direction' => $this->faker->address(5)

        ];
    }
}
