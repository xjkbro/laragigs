<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' =>  $this->faker->sentence(),
            'tags' => 'PHP, Laravel, Vue.js',
            'company' => fake()->company(),
            'location' => fake()->city(),
            'email' => fake()->companyEmail(),
            'website' => fake()->url(),
            'salary' => round(intval(fake()->numberBetween(80000, 200000)), -3),
            'description' => fake()->paragraph(5)
        ];
    }
}
