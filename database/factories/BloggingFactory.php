<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blogging>
 */
class BloggingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'title' =>$this->faker->sentence(),
            'categories' => 'Fruits, Health, Wellness',
            'author'=>$this->faker->sentence(),
            'qualification' =>$this->faker->sentence(),
            'description'=>$this->faker->paragraph(3),
        ];
    }
}
