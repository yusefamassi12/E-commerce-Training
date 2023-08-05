<?php

namespace Modules\Menu\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\Menu\Entities\Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $category_name= $this->faker->unique()->words($nb=2,$asText=true);
        return [
            'name'=>$category_name,
            'description' =>$this->faker->text(200),
        ];
    }
}

