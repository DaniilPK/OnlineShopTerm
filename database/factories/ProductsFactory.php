<?php

namespace Database\Factories;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=Products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Products::class;

    public function definition(): array
    {
        $rand = rand(1,200);
        $rand2 = rand(1,999999);
        return [
            'name' => $this->faker->text(30),
            'price' => $rand,
            'old_price' => rand($rand,$rand+100),
            'image' =>  "https://loremflickr.com/500/300/cat?lock=$rand2" ,
            'description' => $this->faker->sentence(10),
            'grade' => rand(1,5),
            'category_id' => Categories::get()->random()->id
        ];
    }
}
