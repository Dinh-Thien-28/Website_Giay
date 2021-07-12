<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker-text(30);
        return [
            'name'=>$name,
            'cate_id'=> rand(1,100),
            'image'=> $this->faker-text(20),
            'price'=> $this->faker-text(20),
            'quantity'=> $this->faker-text(200),
            'status'=> $this->faker-text(30),

        ];
    }
}
