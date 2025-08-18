<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
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
        return [
            'name' => $this->faker->name(),
            'project'=> $this->faker->jobTitle(),
            'floor' => $this->faker->randomDigit(),
            'object' => $this->faker->text(20),
            'executor' => $this->faker->text(20),
            'period' => $this->faker->dateTimeInInterval(),
            'status' => $this->faker->randomElement(['processing', 'done'])
        ];
    }
}
