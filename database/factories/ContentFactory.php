<?php

namespace Database\Factories;

use App\Models\Content;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ContentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Content::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    
    {
        $name = $this->faker->unique()->name(5);
        return [

            'name_content' => $name,
            'slug_content' => Str::slug($name),
            'description_content' => $this->faker->text(150),
            'content' => $this->faker->text(500),
            'price_content' => $this->faker->buildingNumber(5)
            
        ];
    }
}
