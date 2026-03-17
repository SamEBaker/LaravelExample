<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $images = [
            'landscape1.jpg',
            'landscape2.jpg',
            'landscape3.jpg',
            'landscape4.jpg',
            'landscape5.jpg',
        ];

        return [
            'title' => fake()->jobTitle(),
            'employer_id' => Employer::factory(),
            'description' => fake()->paragraph(),
            'image' => fake()->randomElement($images),
        ];
    }
}
/*
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            'employer_id' => Employer::factory(),
            'salary' => '$50,000 USD'
            'avatar' => fake()->image(storage_path('images'), 50, 50)
        ];
    }
*/
