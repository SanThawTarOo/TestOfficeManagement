<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
              //sample data input
              'title'=>$this->faker->sentence,
              'content'=>$this->faker->paragraph,
              'category_id'=>rand(1,10),
        ];
    }
}
