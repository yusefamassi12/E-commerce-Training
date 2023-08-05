<?php

namespace Modules\Menu\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\Menu\Entities\Image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'photoable_type' =>'Modules/Menu/Entities/Product',
            'photoable_id'=>$this->faker->numberBetween(1,2),
            'src' =>'test_'.$this->faker->unique()->numberBetween(1,22).'.jpg',
        ];
    }
}

