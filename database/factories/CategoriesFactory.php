<?php

namespace Database\Factories;

use App\Models\Categories;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=Categories>
 */
class CategoriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Categories::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->name,
            'image' => "https://loremflickr.com/500/300/cat?lock=".rand(1,999999),
        ];
    }
}
