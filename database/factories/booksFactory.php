<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class booksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->unque()->sentence(),
            'coverpage_image' =>$this->faker->image(640,480),
        ];
    }
}
