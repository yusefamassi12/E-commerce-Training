<?php

namespace Modules\Menu\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\Menu\Entities\Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $product_name= $this->faker->unique()->words($nb=2,$asText=true);
        return [
            'name'=>$product_name,
            'descrption' =>$this->faker->text(200),
            'category_id' =>$this->faker->numberBetween(1,5),
            'price' =>$this->faker->numberBetween(10,500),
        ];
    }
}

